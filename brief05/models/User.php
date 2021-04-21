<?php

namespace app\models;

//use app\core\BaseDBModel;
use app\core\UserModel;

class User extends UserModel
{
    const STATE_USR = 0;
    const STATE_ADMIN = 1;


    public string $usr_id = '';
    public string $usr_fname = '';
    public string $usr_lname = '';
    public string $usr_email = '';
    public string $usr_pwd = '';
    public string $usr_pwd_rpt = '';

    public int $usr_state = self::STATE_USR;

    public static function get_table(): string
    {
        return 'users';
    }

    public static function get_pk(): string
    {
        return 'usr_id';
    }

    public function push(): bool
    {
        $this->usr_id = uniqid(rand(), true);
        $this->usr_state = self::STATE_USR;
        $this->usr_pwd = password_hash($this->usr_pwd, PASSWORD_DEFAULT);
        return parent::push();
    }

    public function get_rows(): array
    {
        return ['usr_id', 'usr_fname', 'usr_lname', 'usr_email', 'usr_pwd', 'usr_state'];
    }

    public function ruleset(): array
    {
        return [
            'usr_fname' => [self::RL_REQUIRED],
            'usr_lname' => [self::RL_REQUIRED],
            'usr_email' => [self::RL_REQUIRED, self::RL_EMAIL, [self::RL_UNIQ, 'class' => self::class]],
            'usr_pwd' => [self::RL_REQUIRED],
            'usr_pwd_rpt' => [self::RL_REQUIRED, [self::RL_MATCH, 'matches' => 'usr_pwd']],
        ];
    }

    public function inputLabels(): array
    {
        return [
            'usr_fname' => 'First Name',
            'usr_lname' => 'Last Name',
            'usr_email' => 'Email',
            'usr_pwd' => 'Password',
            'usr_pwd_rpt' => 'Confirm Password',
        ];
    }

    public function getDisplayName(): string
    {
        // TODO: Implement getDisplayName() method.

        return $this->usr_fname;
    }
}