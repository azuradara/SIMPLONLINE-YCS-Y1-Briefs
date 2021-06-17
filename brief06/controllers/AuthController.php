<?php

namespace app\controllers;

use app\models\User;
use app\core\Request;
use app\models\Login;
use Firebase\JWT\JWT;
use app\core\Response;
use app\core\Controller;
use app\core\Application;
use app\core\middlewares\AuthMD;

class AuthController extends Controller
{

    // $this->socketView('blank');
    // this method to socket content in a different view
    // nvm don't need this

    public function __construct()
    {
        $this->setMds(new AuthMD(['profile']));
    }

    public function login(Request $req, Response $res)
    {
        $login = new Login();

        if ($req->isPOST()) {
            $login->getData($req->getJSON());

            if ($login->validate() && $login->login()) {
                Application::$app->session->setPop('success', "Logged in as " . Application::$app->user->getDisplayName());
            }
            return $res->sendJSON($login);
        }
        return $res->sendJSON([], 'error');
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
            }

            return $res->sendJSON($user);
        }

        return $res->sendJSON([], 'error');
    }

    public function user(Request $req, Response $res)
    {
        if ($req->isGET()) {
            $login = new Login();
            if (!$login->authenticate($req)) return $res->sendJSON('Unauthenticated');

            return $res->sendJSON('ye');
        }
    }
}