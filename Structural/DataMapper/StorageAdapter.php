<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:07
 */

namespace DesignPatterns\Structural\DataMapper;


class StorageAdapter
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
}