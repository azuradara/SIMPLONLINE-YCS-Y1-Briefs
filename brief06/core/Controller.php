<?php

namespace app\core;

use app\core\Request;
use app\core\middlewares\RootMD;

abstract class Controller
{

    public string $layout = 'main';
    public string $deed = '';
    /*
     * @var \app\core\middlewares\RootMD[]
     */
    protected array $mds = [];

    public function getMds(): array
    {
        return $this->mds;
    }

    public function setMds(RootMD $md)
    {
        $this->mds[] = $md;
    }
}