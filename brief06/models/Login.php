<?php


namespace app\models;

use app\core\Application;
use app\core\Model;

class Login extends Model
{
    public string $usr_email = '';
    public string $usr_pwd = '';

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

        // var_dump($user);

        return Application::$app->login($user);
    }
}