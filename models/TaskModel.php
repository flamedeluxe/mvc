<?php


namespace app\models;


use app\core\Model;

class TaskModel extends Model
{
    public string $username;
    public string $email;
    public string $text;
    public int $done;

    /**
     * TaskModel constructor.
     */
    public function __construct()
    {

    }

    public function create()
    {

    }

    public function rules(): array
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'text' => [self::RULE_REQUIRED],
            'done' => []
        ];
    }
}