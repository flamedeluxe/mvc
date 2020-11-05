<?php


namespace app\core;


/**
 * Class Controller
 * @package app\core
 */
class Controller
{
    public string $layout = 'base';

    /**
     * @param $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * @param $view
     * @param array $params
     * @return mixed
     */
    public function render($view, $params = [])
    {
        return App::$app->router->renderView($view, $params);
    }
}