<?php


namespace app\controllers;


use app\core\App;
use app\core\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return $this->render('index', $params);
    }

    public function handleTask()
    {

    }

    public function showTask()
    {
        return $this->render('task');
    }

}