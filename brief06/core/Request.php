<?php

// @package app\core

namespace app\core;

use JetBrains\PhpStorm\Pure;
use stdClass;

class Request
{
    public string|null $auth = null;

    public function __construct()
    {
        $this->auth = $this->getBearer();
    }

    public function getBearer()
    {
        $headers = $this->getAuthHeader();

        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }

        return null;
    }

    public function getAuthHeader()
    {
        $headers = null;

        if (isset($_SERVER['Authorizaion'])) {
            $headers = trim($_SERVER['Authorization']);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
            $headers = trim($_SERVER['HTTP_AUTHORIZATION']);
        } else if (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));

            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }


        return $headers;
    }


    // HELPERS

    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $pos = strpos($path, '?');
        if ($pos === false) {
            return $path;
        }

        return substr($path, 0, $pos);
    }

    #[Pure] public function isGET(): bool
    {
        return $this->method() === 'get';
    }

    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    #[Pure] public function isPOST(): bool
    {
        return $this->method() === 'post';
    }

    #[Pure] public function isPUT(): bool
    {
        return $this->method() === 'put';
    }

    #[Pure] public function isDELETE(): bool
    {
        return $this->method() === 'delete';
    }

    public function getJSON(): stdClass|null
    {
        return json_decode(file_get_contents("php://input"));
    }


    // HELPERS

    #[Pure] public function getReqBody(): array
    {
        $reqBody = [];

        // filter_input ( int $type , string $var_name , int $filter = FILTER_DEFAULT , array|int $options = 0 ) : mixed
        // Idk how it works but it just does

        if ($this->method() === 'get' || $this->method() === 'delete') {
            foreach ($_GET as $k => $val) {
                $reqBody[$k] = filter_input(INPUT_GET, $k, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->method() === 'post') {
            foreach ($_POST as $k => $val) {
                $reqBody[$k] = filter_input(INPUT_POST, $k, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $reqBody;
    }
}