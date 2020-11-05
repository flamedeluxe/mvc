<?php

namespace app\core;

/**
 * Class Router
 *
 * @author Andrey Zhgilev
 * @package app\core
 */

class Router
{
    public Request $request;
    protected array $routes = [];

    /**
     * Router constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "404 Not Found";
            die;
        }
        call_user_func($callback);
    }

    /**
     * Get method
     * @param $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * Post method
     * @param $path
     * @param $callback
     */
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * @param $path
     * @param $callback
     */
    public function put($path, $callback)
    {
        $this->routes['put'][$path] = $callback;
    }

    /**
     * @param $path
     * @param $callback
     */
    public function delete($path, $callback)
    {
        $this->routes['delete'][$path] = $callback;
    }
}