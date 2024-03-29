<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:30
 */

namespace DesignPatterns\Structural\DependencyInjection;


class DatabaseConfiguration
{
    private $host;

    private $port;

    private $username;

    private $password;

    public function __construct(string $host, int $port, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}