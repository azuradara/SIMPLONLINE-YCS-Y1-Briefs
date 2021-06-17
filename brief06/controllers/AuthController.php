<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMD;
use app\core\Request;
use app\core\Response;
use app\models\Login;
use app\models\User;

class AuthController extends Controller
{

    // $this->socketView('blank');
    // this method to socket content in a different view
    // nvm don't need this

    public function __construct()
    {
        $this->setMds(new AuthMD(['profile']));
    }

    public function login(Request $req, Response $res): bool|array|string
    {
        $login = new Login();

        if ($req->isPOST()) {
            $login->getData($req->getReqBody());

            if ($login->validate() && $login->login()) {
                Application::$app->session->setPop('success', "Logged in as " . Application::$app->user->getDisplayName());
                $res->redirect('/');
                return true;
            }
        }
    }

    public function signup(Request $req, Response $res)
    {
        $user = new User();
        //        $err = [];

        if ($req->isPOST()) {
            $user->getData($req->getJSON());

            // var_dump($user);

            if ($user->validate() && $user->push()) {
                Application::$app->session->setPop('success', 'Registration successful!');
                Application::$app->res->redirect('/');
                exit;
            }

            return $res->sendJSON($user);
        }

        return $res->sendJSON([], 'error');
    }

    public function logout(Request $req, Response $res)
    {
        Application::$app->logout();
        Application::$app->session->setPop('success', 'Logged out');
        $res->redirect('/');
    }
}