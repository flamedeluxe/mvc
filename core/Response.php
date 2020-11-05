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
    /**
     * @param int $code
     */
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }
}