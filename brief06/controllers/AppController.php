<?php

// @package app\controllers

namespace app\controllers;

use app\core\Controller;
use app\core\middlewares\AuthMD;

class AppController extends Controller
{

    public function __construct()
    {
        $this->setMds(new AuthMD(['reservations', 'dashboard']));
    }

    public function ye()
    {
        return 'sanctum';
    }
}