<?php


namespace app\models\components;


use app\core\BaseDBModel;

class Room extends BaseDBModel
{
    public string $rm_ord_id = '';
    public string $rm_id = '';
    public string $rm_type = '';
    public string $rm_beds = '';
    public string $rm_view = '';
    public string $rm_pension = '';
    public float $rm_total = 0;

    public function __construct(array $room)
    {
        $this->rm_ord_id = $room['rm_ord_id'];
        $this->rm_id = $room['rm_id'];
        $this->rm_type = $room['rm_type'];
        $this->rm_beds = $room['rm_beds'];
        $this->rm_view = $room['rm_view'];
        $this->rm_pension = $room['rm_p'];
        $this->rm_total = $room['rm_total'];
    }

    public static function get_table(): string
    {
        return 'rooms';
    }

    public static function get_pk(): string
    {
        return 'rm_id';
    }

    public function get_rows(): array
    {
        return ['rm_id', 'rm_ord_id', 'rm_type', 'rm_beds', 'rm_view', 'rm_pension', 'rm_total'];
    }

    public function ruleset(): array
    {
        // No need for a ruleset here
    }
}