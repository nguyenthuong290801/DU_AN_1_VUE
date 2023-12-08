<?php

session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/../vendor/autoload.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

use Illuminate\framework\DisplayError;
use Illuminate\framework\Application;
use Illuminate\framework\Debug;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$error = new DisplayError();
$error->setErrorHandler();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_CONNECTION'] . ";port=" . $_ENV['DB_PORT'] . ";dbname=" . $_ENV['DB_DATABASE'],
        'user' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

require_once '../routes/api.php';
require_once '../routes/web.php';

$app->run();
