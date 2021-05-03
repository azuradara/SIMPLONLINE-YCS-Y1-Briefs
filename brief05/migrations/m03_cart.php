<?php


use app\core\Application;

class m03_cart
{
    public function export()
    {
        $db = Application::$app->db;
        $sql = '
						create table orders (
                            ord_id varchar(255) primary key not null,
                            ord_usr_id varchar(255) not null,
                            ord_rates_id int(255) not null,
                            ord_total float(20,2) not null,
                            
                            foreign key (ord_usr_id) references users(usr_id),
                            foreign key (ord_rates_id) references rates(rates_id)
						);

                        create table rooms (
                            rm_id varchar(255) primary key not null,
                            rm_ord_id varchar(255) not null,
                            rm_view varchar(255) not null,
                            rm_beds varchar(255) not null,
                            rm_type varchar(255) not null,
                            rm_pension varchar(255) not null,
                            rm_total float(20,2) not null,
                            
                            foreign key (rm_ord_id) references orders(ord_id)
                        );

                        create table children (
                            ch_id varchar(255) primary key not null,
                            ch_ord_id varchar(255) not null,
                            ch_opt varchar(255) not null,
                            ch_total float(20,2) not null,
                            
                            foreign key (ch_ord_id) references orders(ord_id)
                        );
					';
        $db->driver->exec($sql);
    }

    public function drop()
    {
        $db = Application::$app->db;
        $sql = '
		drop table if exists orders;
		drop table if exists rooms;
		drop table if exists children;
		';
        $db->driver->exec($sql);
    }
}