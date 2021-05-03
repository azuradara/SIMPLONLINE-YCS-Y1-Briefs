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

    public function contact(Request $req, Response $res): bool|array|string
    {
        $contact = new ContactForm();

        if ($req->isPOST()) {
            $contact->getData($req->getReqBody());

            if ($contact->validate() && $contact->push()) {
                Application::$app->session->setPop('success', 'Thanks for contacting us, we\'ll get back to you soon!');
                return $res->redirect('/contact');
            }
        }

        return $this->render('contact', ['model' => $contact]);
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
                Application::$app->session->setPop('success', 'Registration successful!');
                Application::$app->res->redirect('/');
                exit;
            }

            // var_dump($user->err);

            return $this->render('signup', ['model' => $ratesModel]);
        }

        return Application::$app->user->getState() == 1 ? $this->render('dashboard', ['model' => $ratesModel]) : $res->redirect('/');
    }

    public function rates(Request $req, Response $res)
    {

        if ($req->isPOST()) {
            $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

            $response = [
                'value' => 0,
                'error' => 'All good',
                'data' => null,
            ];

            if ($contentType === 'application/json') {
                $content = trim(file_get_contents('php://input'));

                $decoded = json_decode($content, true);

                if (!is_array($decoded)) {
                    $decoded = json_decode($decoded, true);

                    $response['data'] = Rates::fetchLatest('rates_id');

                    $response['value'] = 1;
                    $response['error'] = null;
                } else {
                    $response['error'] = 'Bad JSON';
                }
            } else {
                $response['error'] = 'Content-Type must be application/json';
            }

            echo json_encode($response);
            return;
        }

        return $res->redirect('/');
    }

    // TODO refactor this later

    public function validateres(Request $req, Response $res)
    {
        if ($req->isPOST()) {
            $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

            $response = [
                'data' => null,
                'error' => null,
            ];

            if ($contentType === 'application/json') {
                $content = trim(file_get_contents('php://input'));

                $decoded = json_decode($content, true);
//                    var_dump($content);
//                    exit();

                if (is_array($decoded)) {

//                    $order = new Order($decoded);

                    if (Order::orderBreakdown($decoded) === false) {
                        $response['error'] = 'Bad Request';
                    } else {
                        $response['data'] = Order::orderBreakdown($decoded);
                    }

//                    $order->push();

                } else {
                    $response['error'] = 'Bad JSON';
                }
            } else {
                $response['error'] = 'Content-Type must be application/json';
            }

            echo json_encode($response);
            return;
        }
    }
}