<?php

use app\core\Application;
use app\models\components\Room;
use app\models\OrderInvalidation;

$this->title = 'Profile';
$this->scripts = ['js/navbar.js'];

$ord = new OrderInvalidation();
$ords = $ord->fetchAll(['ord_usr_id' => Application::$app->session->get('user')]);

if ($ords) {
    foreach ($ords as $o) {
        $rooms = Room::fetchAll(['rm_ord_id' => $o['ord_id']]);
        var_dump($rooms);
    }
} else {
    echo 'No reservations';
}

?>


<h1>Profile goes here</h1>