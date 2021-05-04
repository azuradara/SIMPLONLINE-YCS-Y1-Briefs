<?php

use app\controllers\AppController;
use app\controllers\AuthController;
use app\core\Application;
use app\models\User;

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

$app->on(Application::EV_PRE_REQ, function () {
    // echo 'pre-req';
});

$app->router->get('/', [AppController::class, '_render_home']);
$app->router->get('/reservations', [AppController::class, 'reservations']);

$app->router->get('/dashboard', [AppController::class, 'dashboard']);
$app->router->post('/dashboard', [AppController::class, 'dashboard']);

$app->router->post('/rates', [AppController::class, 'rates']);

$app->router->post('/validateres', [AppController::class, 'validateres']);
$app->router->post('/pushres', [AppController::class, 'pushres']);

$app->router->get('/contact', [AppController::class, 'contact']);
$app->router->post('/contact', [AppController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/signup', [AuthController::class, 'signup']);

$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/signup', [AuthController::class, 'signup']);

// TODO: make logout method POST instead of GET for security reasons
$app->router->get('/logout', [AuthController::class, 'logout']);

$app->router->get('/profile', [AuthController::class, 'profile']);

$app->run();