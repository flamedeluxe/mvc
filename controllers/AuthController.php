<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\LoginModel;

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
        $errors = [];
        $loginModel = new LoginModel();
        if($request->isPost()) {
            $loginModel->loadData($request->getBody());

            if($loginModel->validate() && $loginModel->login()) {
                return 'success';
            }

        }
        return $this->render('login', [
            'model' => $loginModel
        ]);
    }

}