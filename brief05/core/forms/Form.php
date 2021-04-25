<?php

namespace app\core\forms;

use app\core\Model;

class Form
{

    public static function open($action, $method): Form
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form;
    }

    public static function close()
    {
        echo "</form>";
    }

    public function input(Model $model, $attr): RegInput
    {
        return new RegInput($model, $attr);
    }
}