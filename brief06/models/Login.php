<?php


namespace app\models;

use app\core\Model;
use app\models\User;
use app\core\Request;
use Firebase\JWT\JWT;
use app\core\Application;

class Login extends Model
{
    public string $usr_email = '';
    public string $usr_pwd = '';
    public string $token = '';

    public function ruleset(): array
    {
        return [
            'usr_email' => [self::RL_REQUIRED, self::RL_EMAIL],
            'usr_pwd' => [self::RL_REQUIRED]
        ];
    }

    public function inputLabels(): array
    {
        return [
            'usr_email' => 'E-Mail',
            'usr_pwd' => 'Password'
        ];
    }

    public function login(): bool
    {
        $user = User::fetchOne(['usr_email' => $this->usr_email]);
        if (!$user) {
            $this->appendErr('usr_email', "We can't find an account with this address.");
            return false;
        }

        if (!password_verify($this->usr_pwd, $user->usr_pwd)) {
            $this->appendErr('usr_pwd', "Invalid credentials.");
            return false;
        }

        $currtime = time();

        $payload = array(
            "iss" => "sanctum",
            "iat" => $currtime,
            "nbf" => $currtime,
            "exp" => $currtime + 604800,
            "aud" => "users",
            "data" => array(
                "id" => $user->usr_id,
                "usr_email" => $user->usr_email,
                "usr_pwd" => $user->usr_pwd
            )

        );

        $this->token = JWT::encode($payload, Application::$SECRET, 'HS512');

        // var_dump($user);
        return true;
    }


    public function authenticate(Request $req)
    {
        $token = $req->auth;

        // var_dump($token);
        // exit();

        if (is_null($token)) return false;

        $auth = JWT::decode($token, Application::$SECRET, array('HS512'));

        $usr_data = (array) $auth->data;

        $this->getData($usr_data);

        $user = User::fetchOne(['usr_email' => $this->usr_email]);


        if (!$user || $this->usr_pwd !== $user->usr_pwd) return false;

        Application::$app->login($user);

        return true;
    }
}