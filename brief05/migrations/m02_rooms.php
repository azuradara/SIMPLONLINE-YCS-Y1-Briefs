<?php

//namespace app\migrations;

use app\core\Application;

class m02_rooms
{
    public function export()
    {
        $db = Application::$app->db;
        $sql = '
						create table orders (
							ord_id int(255) primary key auto_increment,
							ord_usr_id varchar(255) not null,
							ord_pension varchar(255) not null,

							foreign key (ord_usr_id) references users(usr_id)
						);

						create table kids (
							kd_id int(255) primary key auto_increment,
							kd_ord_id int(255) not null,
							kd_age int(255) not null,

							foreign key (kd_ord_id) references orders(ord_id)
						);

						create table rooms (
							rm_id int(255) primary key auto_increment,
							rm_ord_id int(255) not null,
							rm_type varchar(255) not null,
							rm_beds int(255) not null,
							rm_view tinyint not null,

							foreign key (rm_ord_id) references orders(ord_id)
						);

						create table rates (
							restriction enum("") not null,
						
							base_single float(24),
							base_doule float(24),
							tax_view float(24),
							tax_kid_1 float(24),
							tax_kid_2 float(24),
							tax_kid_3 float(24),
							pension_none float(24),
							pension_semi float(24),
							pension_full float(24)
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