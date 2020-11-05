<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\App;

$app = new App(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'index']);
$app->router->get('/task', [SiteController::class, 'showTask']);
$app->router->post('/task', [SiteController::class, 'handleTask']);

$app->run();