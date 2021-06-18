<?php

//namespace app\migrations;

use app\core\Application;

class m02_slots
{
    public function export()
    {
        $db = Application::$app->db;
        $sql = "

            create type timeslot as ENUM ('1', '2', '3', '4', '5');

            create table slots (
                slt_id varchar(255) primary key,
                slt_usr_id varchar(255) not null,
                slt_date date not null,
                slt_timeslot timeslot,
                slt_isactive boolean default FALSE,

                foreign key (slt_usr_id) references users(usr_id)
            );
		";
        $db->driver->exec($sql);
    }

    public function drop()
    {
        $db = Application::$app->db;
        $sql = '
		drop table if exists slots;
		';
        $db->driver->exec($sql);
    }
}