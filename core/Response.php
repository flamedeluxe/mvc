<?php


namespace app\core;

/**
 * Class Response
 *
 * @author Andrey Zhgilev
 * @package app\core
 */

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}