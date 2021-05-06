<?php

//namespace app\migrations;

use app\core\Application;

class m01_init
{
	public function export()
	{
		$db = Application::$app->db;
		$sql = '
				create table users (
					usr_id varchar(255) primary key,
					usr_state int not null,
					usr_fname varchar(255) not null,
					usr_lname varchar(255) not null,
					usr_email varchar(255) unique not null,
					usr_pwd varchar(255) not null,
					usr_creation_date timestamp default current_timestamp
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