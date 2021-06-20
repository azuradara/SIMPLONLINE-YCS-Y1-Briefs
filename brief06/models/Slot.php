<?php

namespace app\models;

use app\core\Application;
use app\core\BaseDBModel;

class Slot extends BaseDBModel
{

    public string $slt_id = '';
    public string $slt_usr_id = '';
    public string $slt_date = '';
    public string $slt_timeslot = '';
    public string $slt_desc = '';
    public string $slt_sub = '';
    public int $slt_isactive = 1;

    public static function get_table(): string
    {
        return 'slots';
    }

    public static function get_pk(): string
    {
        return 'slt_id';
    }

    public function push(): bool
    {
        $this->slt_id = uniqid(rand(), true);
        $this->slt_usr_id = Application::$app->user->usr_id;

        return parent::push();
    }

    public function get_rows(): array
    {
        return ['slt_id', 'slt_desc', 'slt_sub', 'slt_usr_id', 'slt_date', 'slt_timeslot', 'slt_isactive'];
    }

    public function ruleset(): array
    {
        return [
            "slt_date" => [self::RL_DATE, self::RL_REQUIRED],
            "slt_timeslot" => [self::RL_REQUIRED],
            "slt_desc" => [self::RL_REQUIRED],
            "slt_sub" => [self::RL_REQUIRED]
        ];
    }
}