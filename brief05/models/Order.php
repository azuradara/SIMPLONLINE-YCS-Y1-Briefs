<?php


namespace app\models;


use app\core\Application;
use app\core\BaseDBModel;
use app\models\components\Room;

class Order extends BaseDBModel
{

    public string $ord_id = '';
    public string $ord_usr_id = '';
    public string $ord_rates_id = '';
    public float $ord_total = 0;
    public array $receipt;
    public array $order = [];
    public array $body;

    public function __construct(array $order)
    {
        $this->body = $order;
        $this->receipt = self::orderBreakdown($order);

        $this->ord_id = uniqid(rand(), true);
        $this->ord_usr_id = Application::$app?->user->usr_id;
        $this->ord_rates_id = $order['ratesId'];
        $this->ord_total = $this->receipt['total'];
    }

    static public function orderBreakdown($arr): array
    {
        list(
            'rooms' => $rooms,
            'children' => $children,
            'ratesId' => $ratesId
            ) = $arr;

        $receipt = [
            'rooms' => [],
            'children' => [],
            'total' => 0,
            'total_ch' => 0,
            'total_rm' => 0,
            'rates_id' => ''
        ];

        $rates = (array)Rates::fetchLatest('rates_id');

        $ch_total = 0;
        $rm_total = 0;

        foreach ($rooms as $r) {
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
                ]);

            $rm_total += $p_pension + $p_base + $p_view;
        }

        foreach ($children as $c) {
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

    public static function get_table(): string
    {
        return 'orders';
    }

    public static function get_pk(): string
    {
        return 'ord_id';
    }

    public function get_rows(): array
    {
        return ['ord_id', 'ord_usr_id', 'ord_rates_id', 'ord_total'];
    }

    public function ruleset(): array
    {
        // No need for a ruleset
    }

    public function push(): bool
    {
        parent::push();
        foreach ($this->body['rooms'] as $k => $v) {
            $v['rm_ord_id'] = $this->ord_id;
            $v['rm_id'] = uniqid(rand(), true);

            $v['rm_total'] = $this->receipt['rooms'][$k]['total'];


            $r = new Room($v);
/*            var_dump($r);
            exit();*/

            $r->push();
        }

        return true;
    }
}