<?php

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}


if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}

use app\controllers\AppController;
use app\controllers\AuthController;
use app\controllers\SlotController;
use app\core\Application;
use app\models\User;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// var_dump(User::class);
// exit();

$config = [
    'userClass' => User::class,
    'SECRET' => $_ENV['JWT_SECRET'],
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'pwd' => $_ENV['DB_PWD'],
    ],
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [AppController::class, 'ye']);

$app->router->post('/api/signup', [AuthController::class, 'signup']);
$app->router->post('/api/login', [AuthController::class, 'login']);

$app->router->get('/api/slots', [SlotController::class, 'allSlots']);
$app->router->post('/api/slots', [SlotController::class, 'saveSlot']);
$app->router->put('/api/slots', [SlotController::class, 'updateSlot']);
$app->router->delete('/api/slots', [SlotController::class, 'deleteSlot']);

$app->router->get('/api/user', [AuthController::class, 'user']);
$app->router->get('/api/user/slots', [SlotController::class, 'userSlots']);

$app->run();