<?php


namespace app\controllers;

use app\core\Request;
use app\models\Order;
use app\models\Rates;
use app\core\Response;
use app\core\Controller;
use app\core\middlewares\AuthMD;

class OrderController extends Controller
{
	public function __construct()
	{
		$this->setMds(new AuthMD(['reservations', 'dashboard']));
	}

	public static function orderInvalidation($arr)
	{
		list(
			'rooms' => $rooms,
			'children' => $children,
			'ratesId' => $ratesId
		) = $arr;


		if (!isset($rooms) || count($rooms) == 0) return false;

		$receipt = [
			'rooms' => [],
			'children' => [],
			'total' => 0,
			'total_ch' => 0,
			'total_rm' => 0,
			'rates_id' => '',
		];

		$rates = (array)Rates::fetchLatest('rates_id');

		$ch_total = 0;
		$rm_total = 0;

		foreach ($rooms as $r) {

			if (!isset($r['rm_type'], $r['rm_beds'], $r['rm_view'], $r['rm_p'])) return false;

			$p_base = $rates['tax_' . $r['rm_type']];
			$p_view = $r['rm_view'] === 'ext' ? $p_base * ($rates['tax_view'] / 100) : 0;
			$p_pension = $r['rm_p'] !== 'pension_none' ? $rates['tax_' . $r['rm_p']] : 0;

			array_push(
				$receipt['rooms'],
				[
					'base' => $p_base,
					'view' => $p_view,
					'pension' => $p_pension,
					'total' => $p_pension + $p_base + $p_view
				]
			);

			$rm_total += $p_pension + $p_base + $p_view;
		}

		foreach ($children as $c) {

			if (!isset($c['ch_opt'])) return false;

			$total = $c['ch_opt'] !== 'none'
				? $c['ch_opt'] !== 'single'
				? $rates['tax_single'] * ($rates['tax_' . $c['ch_opt']] / 100)
				: $rates['tax_single']
				: 0;

			array_push($receipt['children'], ['total' => $total]);

			$ch_total += $total;
		}

		$receipt['rates_id'] = $ratesId;
		$receipt['total_rm'] = $rm_total;
		$receipt['total_ch'] = $ch_total;
		$receipt['total'] = $ch_total + $rm_total;

		return $receipt;
	}

	public function getRates(Request $req, Response $res)
	{
		if ($req->isPOST()) {
			$input = $this->resolveJSON();

			if ($input === false) return;

			return $this->sendJSON(Rates::fetchLatest('rates_id'));
		}

		return $res->redirect('/');
	}

	public function checkReservation(Request $req, Response $res)
	{
		if ($req->isPOST()) {
			$input = $this->resolveJSON();

			if ($input === false) return;

			if (self::orderInvalidation($input) === false)
				return $this->sendJSON([], 'Bad Request');
			else
				return $this->sendJSON($this->orderInvalidation($input));
		}

		return $res->redirect('/');
	}

	public function pushReservation(Request $req, Response $res)
	{
		if ($req->isPOST()) {
			$input = $this->resolveJSON();

			if ($input === false) return;

			if (self::orderInvalidation($input) === false)
				return $this->sendJSON([], 'Bad Request');
			else {
				$receipt = $this->orderInvalidation($input);

				$order = new Order($input, $receipt);

				$order->push();

				return $this->sendJSON($receipt);
			}
		}

		return $res->redirect('/');
	}
}