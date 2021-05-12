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

    public function render($view, $crumbs = []): bool|array|string
    {
        return Application::$app->view->renderView($view, $crumbs);
    }

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

    // --Commented out by Inspection START (4/17/2021 5:15 AM):
    //    public function socketView($layout)
    //    {
    //        $this->layout = $layout;
    //    }
    // --Commented out by Inspection STOP (4/17/2021 5:15 AM)


    public function getMds(): array
    {
        return $this->mds;
    }

    public function setMds(RootMD $md)
    {
        $this->mds[] = $md;
    }
}