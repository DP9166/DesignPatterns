<?php


/*
 * 简单工厂
 *  角色扮演
 *      车:      VwCar类, Audi类
 *      工厂:     Factory类
 * */

class VwCar
{

}

class AudiCar
{

}

class Factory
{
    const VM = 1;
    const Audi = 2;

    public function produce($type)
    {
        switch ($type) {
            case self::VM:
                return new VwCar();
            case self::Audi:
                return new AudiCar();
        }
    }
}


$factory = new Factory();
$vm = $factory->produce(Factory::VM);
var_dump($vm);


/*
 *  result => object(VwCar)#2 (0) { }
 * */