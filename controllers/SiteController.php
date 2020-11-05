<?php


namespace app\controllers;


use app\core\Controller;
use app\core\Request;
use app\models\TaskModel;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $params = [
            'user' => 'flame'
        ];
        return $this->render('index', $params);
    }

    /**
     * @param Request $request
     * @return mixed|string
     */
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