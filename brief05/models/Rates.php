<?php


namespace app\models;

use app\core\BaseDBModel;

class Rates extends BaseDBModel
{
    public int $tax_single = 0;
    public int $tax_double = 0;
    public int $tax_view = 0;
    public int $tax_baby_bed = 0;
    public int $tax_child_bed = 0;
    public int $tax_teen_bed = 0;
    public int $tax_pension_semi = 0;
    public int $tax_pension_full = 0;

    public static function get_table(): string
    {
        return 'rates';
    }

    public static function get_pk(): string
    {
        return 'rates_id';
    }

    public function ruleset(): array
    {
        return [
            'tax_single' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_double' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_view' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_baby_bed' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_child_bed' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_teen_bed' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_pension_semi' => [self::RL_REQUIRED, self::RL_INTEGER],
            'tax_pension_full' => [self::RL_REQUIRED, self::RL_INTEGER],
        ];
    }

    public function get_rows(): array
    {
        return ['tax_single', 'tax_double', 'tax_view', 'tax_baby_bed', 'tax_child_bed', 'tax_teen_bed', 'tax_pension_semi', 'tax_pension_full'];
    }

    public function inputLabels(): array
    {
        return [
            'tax_single' => 'Single room rate $',
            'tax_double' => 'Double room rate $',
            'tax_view' => 'Exterior view tax %',
            'tax_baby_bed' => 'Baby bed add-on tax %',
            'tax_child_bed' => ' Child bed add-on tax %',
            'tax_teen_bed' => 'Teen bed add-on tax %',
            'tax_pension_semi' => 'Semi pension tax $',
            'tax_pension_full' => 'Full pension tax $',
        ];
    }
}