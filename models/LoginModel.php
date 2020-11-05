<?php


namespace app\models;


use app\core\Model;

/**
 * Class LoginModel
 * @package app\models
 */
class LoginModel extends Model
{
    public string $email;
    public string $password;

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }
}