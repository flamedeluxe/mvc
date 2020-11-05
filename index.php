<?php

require_once __DIR__ . '/vendor/autoload.php';

use app\core\App;

$app = new App();

$app->router->get('/', function (){
    echo 'Hello World';
});

$app->router->get('/todo', function (){
    echo 'Hello World';
});

$app->run();