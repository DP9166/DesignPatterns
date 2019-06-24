<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 13:35
 */

namespace DesignPatterns\Creational\AbstractFactory;

/*
 *  工厂接口
 * */
interface Product
{
    public function calculatePrice(): int;
}