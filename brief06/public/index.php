<?php

use app\models\User;
use app\core\Application;
use app\controllers\AppController;
use app\controllers\AuthController;
use app\controllers\OrderController;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'pwd' => $_ENV['DB_PWD'],
    ],
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [AppController::class, 'ye']);

// $app->router->get('/', [AppController::class, '_render_home']);
// $app->router->get('/reservations', [AppController::class, 'reservations']);

// $app->router->get('/dashboard', [AppController::class, 'dashboard']);
// $app->router->post('/dashboard', [AppController::class, 'dashboard']);

// $app->router->post('/rates', [OrderController::class, 'getRates']);

// $app->router->post('/validateres', [OrderController::class, 'checkReservation']);
// $app->router->post('/pushres', [OrderController::class, 'pushReservation']);

// $app->router->get('/login', [AuthController::class, 'login']);
// $app->router->get('/signup', [AuthController::class, 'signup']);

// $app->router->post('/login', [AuthController::class, 'login']);
// $app->router->post('/signup', [AuthController::class, 'signup']);

// // TODO: make logout method POST instead of GET for security reasons
// $app->router->get('/logout', [AuthController::class, 'logout']);

// $app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();