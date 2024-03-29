<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:06
 */

namespace DesignPatterns\Structural\DataMapper;


class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }


    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #id not found");
        }
        return $this->mapRowToUser($result);
    }

    public function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}