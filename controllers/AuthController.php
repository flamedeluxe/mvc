<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if($request->isPost()) {

        }
        return $this->render('register');
    }

    public function login(Request $request)
    {
        if($request->isPost()) {

        }
        return $this->render('login');
    }

}