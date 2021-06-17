<?php

namespace app\core;

class Response
{
    public function setStatusCode($code)
    {
        return true;
        http_response_code($code);
    }

    public function redirect(string $string)
    {
        header('Location: ' . $string);
    }

    public function sendJSON($data, $error = null)
    {
        $body = [
            'error' => $error,
            'data' => null
        ];

        $body['data'] = $data;

        echo json_encode($body);
        return;
    }
}