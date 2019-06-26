<?php


namespace DesignPatterns\Creational\Builder\parts;


abstract  class Vehicle
{
    private $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}