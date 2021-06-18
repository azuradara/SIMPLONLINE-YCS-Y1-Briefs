<?php

// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
    // you want to allow, and if so:
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        // may also be using PUT, PATCH, HEAD etc
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}

use app\models\User;
use app\core\Application;
use app\controllers\AppController;
use app\controllers\AuthController;
use app\controllers\SlotController;

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

$app->router->get('/api/user', [AuthController::class, 'user']);

$app->router->get('/api/all_slots', [SlotController::class, 'allSlots']);
$app->router->get('/api/user_slots', [SlotController::class, 'userSlots']);
$app->router->post('/api/save_slot', [SlotController::class, 'saveSlot']);

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