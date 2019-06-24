<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 13:42
 */

namespace DesignPatterns\Creational\AbstractFactory;

class DigitalProduct implements Product
{
    private $price;

    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }
}

