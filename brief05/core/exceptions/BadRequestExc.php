<?php


namespace app\core\exceptions;


use Exception;

class BadRequestExc extends Exception
{
    protected $message = "Bad Request.";
    protected $code = 400;
}