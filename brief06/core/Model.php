<?php

/** @noinspection PhpUnnecessaryCurlyVarSyntaxInspection */

namespace app\core;

use DateTime;

abstract class Model
{
    public const RL_REQUIRED = 'required';
    public const RL_EMAIL = 'email';
    public const RL_MIN = 'min';
    public const RL_MAX = 'max';
    public const RL_MATCH = 'match';
    public const RL_UNIQ = 'unique';
    public const RL_INTEGER = 'integer';
    public const RL_PHONE = 'phone';
    public const RL_DATE = 'date';

    public array $err = [];

    public function getData($data)
    {
        foreach ($data as $k => $val) {
            if (property_exists($this, $k)) {
                $this->{$k} = $val;
            }
        }
    }

    public function validate(): bool
    {
        foreach ($this->ruleset() as $attr => $ruleset) {
            $val = $this->{$attr};

            foreach ($ruleset as $rule) {
                $flag = $rule;

                if (!is_string($flag)) {
                    $flag = $rule[0];
                }

                if ($flag === self::RL_REQUIRED && !$val) {
                    $this->resolveRuleErr($attr, self::RL_REQUIRED);
                }

                if ($flag === self::RL_PHONE && !preg_match('/^[0-9]{8,15}/', $val)) {
                    $this->resolveRuleErr($attr, self::RL_PHONE);
                }

                if ($flag === self::RL_DATE) {
                    $dt = DateTime::createFromFormat('Y-m-d', $val);
                    if ($dt === false) {
                        $this->resolveRuleErr($attr, self::RL_DATE);
                    }
                }

                if ($flag === self::RL_EMAIL && !filter_var($val, FILTER_VALIDATE_EMAIL)) {
                    $this->resolveRuleErr($attr, self::RL_EMAIL);
                }

                if ($flag === self::RL_MIN && strlen($val) < $rule['val']) {
                    $this->resolveRuleErr($attr, self::RL_MIN, $rule);
                }

                if ($flag === self::RL_MAX && strlen($val) > $rule['val']) {
                    $this->resolveRuleErr($attr, self::RL_MAX, $rule);
                }

                if ($flag === self::RL_MATCH && $val !== $this->{$rule['matches']}) {
                    $rule['matches'] = $this->get_label($rule['matches']);
                    $this->resolveRuleErr($attr, self::RL_MATCH, $rule);
                }

                if ($flag === self::RL_INTEGER && !is_int($val)) {
                    $this->resolveRuleErr($attr, self::RL_INTEGER, $rule);
                }

                if ($flag === self::RL_UNIQ) {
                    $srcClass = $rule['class'];
                    $srcAttr = $rule['attr'] ?? $attr;
                    $table = $srcClass::get_table();

                    // TODO: maybe shortcut the db methods later

                    $stmt = Application::$app->db->driver->prepare("SELECT * FROM $table WHERE $srcAttr = :attr");
                    $stmt->bindValue(":attr", $val);
                    $stmt->execute();
                    $not_unique = $stmt->fetchObject();

                    if ($not_unique) {
                        $this->resolveRuleErr($attr, self::RL_UNIQ, ['input' => $this->get_label($attr)]);
                    }
                }
            }
        }

        return empty($this->err);
    }

    abstract public function ruleset(): array;

    private function resolveRuleErr(string $attr, string $flag, $par = [])
    {
        $param = (array)$par;
        $msg = $this->resolveErr()[$flag] ?? '';

        foreach ($param as $k => $val) {
            $msg = str_replace("{{$k}}", $val, $msg);
        }

        $this->err[$attr][] = $msg;
    }

    public function resolveErr(): array
    {
        return [
            self::RL_REQUIRED => 'This field is required.',
            self::RL_EMAIL => 'This is not a valid email address.',
            self::RL_MIN => 'This field cannot be shorter than {val} characters.',
            self::RL_MAX => 'This field cannot be longer than {val} characters.',
            self::RL_MATCH => 'This field must match {matches}.',
            self::RL_UNIQ => 'This {input} already exists.',
            self::RL_INTEGER => 'This field only accepts integers.',
            self::RL_DATE => 'Invalid Date.',
            self::RL_PHONE => 'Invalid Phone Number.'
        ];
    }

    public function get_label($attr)
    {
        return $this->inputLabels()[$attr] ?? $attr;
    }

    public function inputLabels(): array
    {
        return [];
    }

    public function appendErr(string $attr, string $msg)
    {
        $this->err[$attr][] = $msg;
    }

    public function hasErr($attr)
    {
        return $this->err[$attr] ?? false;
    }

    public function firstErr($attr)
    {
        return $this->err[$attr][0] ?? false;
    }
}