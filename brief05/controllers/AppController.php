<?php

// @package app\controllers

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMD;
use app\core\Request;
use app\core\Response;
use app\models\ContactForm;
use app\models\Order;
use app\models\Rates;

// use \app\core\Application;

class AppController extends Controller
{

    public function __construct()
    {
        $this->setMds(new AuthMD(['reservations', 'dashboard']));
    }

    public function _render_home(): bool|array|string
    {
        $crumbs = [
            'test' => 'test'
        ];

        return $this->render('home', $crumbs);
    }

    public function reservations(Request $req, Response $res)
    {
        return $this->render('reservations');
    }

    public function dashboard(Request $req, Response $res)
    {
        $ratesModel = new Rates();

        if ($req->isPOST()) {
            $ratesModel->getData($req->getReqBody());

            // var_dump($user);

            if ($ratesModel->validate() && $ratesModel->push()) {
                Application::$app->session->setPop('success', 'Rates modified successfully!');
                Application::$app->res->redirect('/');
                exit;
            }

            // var_dump($user->err);

            return $this->render('signup', ['model' => $ratesModel]);
        }

        return Application::$app->user->getState() == 1 ? $this->render('dashboard', ['model' => $ratesModel]) : $res->redirect('/');
    }
}