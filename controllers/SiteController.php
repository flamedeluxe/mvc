<?php


namespace app\controllers;


use app\core\App;
use app\core\Controller;
use app\core\Request;
use app\models\TaskModel;

class SiteController extends Controller
{
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return $this->render('index', $params);
    }

    public function showTask(Request $request)
    {
        $errors = [];
        $taskModel = new TaskModel();
        if($request->isPost()) {
            $taskModel->loadData($request->getBody());

            if($taskModel->validate() && $taskModel->showTask()) {
                return 'success';
            }

        }
        return $this->render('task', [
            'model' => $taskModel
        ]);
    }

}