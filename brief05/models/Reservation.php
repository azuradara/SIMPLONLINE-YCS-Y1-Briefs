<?php


namespace app\models;


use app\core\BaseDBModel;

class Reservation extends BaseDBModel
{

    public static function get_table(): string
    {
        // TODO: Implement get_table() method.
    }

    public static function get_pk(): string
    {
        // TODO: Implement get_pk() method.
    }

    public function get_rows(): array
    {
        // TODO: Implement get_rows() method.
    }

    public function ruleset(): array
    {
        // TODO: Implement ruleset() method.
    }

    public function resolveCart($arr): array
    {
        list(
            'rooms' => $rooms,
            'children' => $children,
            'ratesId' => $ratesId
            ) = $arr;

        $bill = [
            'rooms' => [],
            'children' => [],
        ];

        $rates = (array) Rates::fetchLatest('rates_id');

        foreach ($rooms as $r) {
            $p_base = $rates['tax_' . $r['rm_type']];
            $p_view = $r['rm_view'] === 'ext' ? $p_base * ($rates['tax_view'] / 100) : 0;
            $p_pension = $r['rm_p'] !== 'pension_none' ? $rates['tax_' . $r['rm_p']] : 0;

            array_push(
                $bill['rooms'],
                [
                    'base' => $p_base,
                    'view' => $p_view,
                    'pension' => $p_pension,
                    'total' => $p_pension + $p_base + $p_view
                ]);
        }

        foreach($children as $c) {
            $total = $c['ch_opt'] !== 'none'
                ? $c['ch_opt'] !== 'single'
                    ? $rates['tax_single'] * ($rates['tax_' . $c['ch_opt']] / 100)
                    : $rates['tax_single']
                : 0;

            array_push($bill['children'], ['total' => $total]);
        }

        array_push($bill, ['ratesId' => $ratesId]);

        return $bill;
    }
}