<?php

$app = new App();

$app->router->get('/', function (){
    return 'Hello World';
});

$app->run();