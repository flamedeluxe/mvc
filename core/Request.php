<?php


namespace app\core;

/**
 * Class Request
 *
 * @author Andrey Zhgilev
 * @package app\core
 */

class Request
{
    /**
     * @return bool|mixed|string
     */
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    /**
     * @return string
     */
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @return bool
     */
    public function isGet()
    {
        return $this->method() === 'get';
    }

    /**
     * @return bool
     */
    public function isPost()
    {
        return $this->method() === 'post';
    }

    /**
     * @return array
     */
    public function getBody()
    {
        $body = [];
        if($this->method() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if($this->method() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }
}