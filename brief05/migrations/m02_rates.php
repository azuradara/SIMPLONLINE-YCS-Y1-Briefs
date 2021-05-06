<?php

//namespace app\migrations;

use app\core\Application;

class m02_rates
{
    public function export()
    {
        $db = Application::$app->db;
        $sql = '
						create table rates (
							rates_id int(255) auto_increment primary key,
							tax_single int(255),
							tax_double int(255),
							tax_view int(255),
							tax_baby_bed int(255),
							tax_child_bed int(255),
							tax_teen_bed int(255),
							tax_pension_semi int(255),
							tax_pension_full int(255)
						);
					';
        $db->driver->exec($sql);
    }

    public function drop()
    {
        $db = Application::$app->db;
        $sql = '
		drop table if exists rates;
		';
        $db->driver->exec($sql);
    }
}