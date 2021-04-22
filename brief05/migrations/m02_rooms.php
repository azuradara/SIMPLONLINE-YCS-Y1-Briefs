<?php

//namespace app\migrations;

use app\core\Application;

class m02_rooms
{
    public function export()
    {
        $db = Application::$app->db;
        $sql = '
		create table orders(
			ord_id int(255) auto_increment primary key,
			ord_usr_id varchar(255) not null,

			foreign key (ord_usr_id) references users(usr_id)
		);

		create table gst_grps(
			rm_id int(255) auto_increment primary key,
			rm_order_id int(255) not null,
			rm_type varchar(255) not null,
			rm_bed_upgrade tinyint not null,
			rm_view tinyint not null,
			rm_pension varchar(255) not null,

			foreign key (rm_order_id) references orders(ord_id)
		);

		create table gremlins (
			grm_id int(255) auto_increment primary key,
			grm_rm_id int(255) not null,
			grm_age int(255) not null,
			grm_room tinyint not null,
			grm_bed tinyint not null,

			foreign key (grm_rm_id) references gst_grps(rm_id)
		);
		';
        $db->driver->exec($sql);
    }

    public function drop()
    {
        $db = Application::$app->db;
        $sql = '
		drop table if exists users;
		';
        $db->driver->exec($sql);
    }
}