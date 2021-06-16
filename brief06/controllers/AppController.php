<?php

// @package app\controllers

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMD;
use app\core\Request;
use app\core\Response;
use app\models\User;

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