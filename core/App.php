<?php


namespace app\core;

/**
 * Class App
 *
 * @author Andrey Zhgilev
 * @package app\core
 */

class App
{

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static App $app;
    public Controller $controller;

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}