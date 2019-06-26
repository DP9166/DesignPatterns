<?php

/*
 * 工厂方法
 *     角色扮演
 *          车:      VwCar, AudiCar
 *          总工厂:    Factory抽象类
 *          子工厂:    VwCarFactory,   AudiCarFactory
 * */

class VwCar
{

}

class AudiCar
{

}

abstract class Factory
{
    abstract public function produce();
}

class VwCarFactory extends Factory
{
    public function produce()
    {
        return new VwCar();
    }
}

class AudiCarFactory extends Factory
{
    public function produce()
    {
        return new AudiCar();
    }
}


$factory = new VwCarFactory();
$vm = $factory->produce();
var_dump($vm);


/*
 * result => object(VwCar)#2 (0) { }
 * */