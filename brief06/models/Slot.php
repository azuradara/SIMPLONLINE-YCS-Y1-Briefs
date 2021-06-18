<?php

namespace app\models;

use app\core\BaseDBModel;
use app\core\Application;

class Slot extends BaseDBModel
{

    public string $slt_id = '';
    public string $slt_usr_id = '';
    public string $slt_date = '';
    public string $slt_timeslot = '';
    public bool $slt_isactive = false;

    public function push(): bool
    {
        $this->slt_id = uniqid(rand(), true);
        return parent::push();
    }

    public static function get_table(): string
    {
        return 'slots';
    }

    public static function get_pk(): string
    {
        return 'slt_id';
    }

    public function get_rows(): array
    {
        return ['slt_id', 'slt_usr_id', 'slt_date', 'slt_timeslot', 'slt_isactive'];
    }

    public function ruleset(): array
    {
        return [];
    }
}