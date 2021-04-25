<?php

namespace app\core\forms;

use app\core\Model;
use JetBrains\PhpStorm\Pure;

class RegInput extends BaseInput
{
    public const TY_TEXT = 'text';
    public const TY_PWD = 'password';
    public const TY_NUM = 'number';

    public string $type;

    public function __construct(Model $model, string $attr)
    {
        parent::__construct($model, $attr);
        $this->type = self::TY_TEXT;
    }

    public function toPwd(): RegInput
    {
        $this->type = self::TY_PWD;
        return $this;
    }

    public function toInt(): RegInput
    {
        $this->type = self::TY_NUM;
        return $this;
    }

    //TODO: go over this later, it works but it's way too scuffed
    //make it so that you can add classes or maybe dynamic attributes(?)

    public function renderInput(): string
    {
        return sprintf(
            '<input type="%s" name="%s" value="%s" class="%s rounded-lg flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:border-transparent focus:ring-yellow-500"/>',
            $this->type,
            $this->attr,
            $this->model->{$this->attr},
            $this->model->hasErr($this->attr) ? 'border-red-600' : 'border-gray-300',
        );
    }
}