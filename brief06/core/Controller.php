<?php

namespace app\core;

use app\core\middlewares\RootMD;

abstract class Controller
{

    public string $layout = 'main';
    public string $deed = '';
    /*
     * @var \app\core\middlewares\RootMD[]
     */
    protected array $mds = [];

    public function resolveJSON()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === 'application/json') {
            $content = json_decode(trim(file_get_contents('php://input')), true);
            if (is_array($content)) {
                return $content;
            } else {
                return false;
            }
        } else {
            return false;
        }
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

    public function getMds(): array
    {
        return $this->mds;
    }

    public function setMds(RootMD $md)
    {
        $this->mds[] = $md;
    }
}