<?php


namespace app\controllers;


use app\core\App;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return $this->render('index', $params);
    }

    public function handleTask(Request $request)
    {
        $body = $request->getBody();
    }

    public function showTask()
    {
        return $this->render('task');
    }

}