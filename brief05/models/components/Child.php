<?php


namespace app\models\components;


use app\core\BaseDBModel;

class Child extends BaseDBModel
{
    public string $ch_ord_id = '';
    public string $ch_id = '';
    public string $ch_opt = '';
    public float $ch_total = 0;

    public function __construct(array $child)
    {
        $this->ch_ord_id = $child['ch_ord_id'];
        $this->ch_id = $child['ch_id'];
        $this->ch_opt = $child['ch_opt'];
        $this->ch_total = $child['ch_total'];
    }

    public static function get_table(): string
    {
        return 'children';
    }

    public static function get_pk(): string
    {
        return 'ch_id';
    }

    public function get_rows(): array
    {
        return ['ch_id', 'ch_ord_id', 'ch_opt', 'ch_total'];
    }

    public function ruleset(): array
    {
        // No need for a ruleset here
    }
}