<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:03
 */

namespace DesignPatterns\Structural\DataMapper;


class User
{
    private $username;

    private $email;

    public static function fromState(array $state): User
    {
        return new self([
            $state['username'],
            $state['email']
        ]);
    }

    public function __construct(String $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}