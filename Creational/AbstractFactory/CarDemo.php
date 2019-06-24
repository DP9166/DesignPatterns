<?php


/*
 * 简单工厂
 *  角色扮演
 *      车:      VwCar类, Audi类
 *      工厂:     Factory类
 *
 * 工厂方法
 *    角色扮演
 *         车:      VwCar, AudiCar
 *         总工厂:    Factory抽象类
 *          子工厂:    VwCarFactory,   AudiCarFactory
 *
 *
 * 抽象工厂
 *  角色扮演
 *      低端车接口:      LowEndCar
 *      车:             VwLowEndCar
 *      总工厂:          Factory
 *      子工厂:          VwCarFactory
 * */

interface LowEndCar
{

}

interface MiddleEndCar
{

}

interface HeightEndCar
{

}

class VwLowEndCar implements LowEndCar
{

}

class VwMiddleEndCar implements MiddleEndCar
{

}

class VwHeightEndCar implements HeightEndCar
{

}


class AudiLowEndCar implements LowEndCar
{

}

class AudiMiddleEndCar implements MiddleEndCar
{

}

class AudiHeightEndCar implements HeightEndCar
{

}

abstract class Factory
{
    abstract public function produceLowEndCar();
    abstract public function produceMiddleEndCar();
    abstract public function produceHeightEndCar();
}

class VwCarFactory extends Factory
{
    public function produceLowEndCar()
    {
        return new VwLowEndCar();
    }

    public function produceMiddleEndCar()
    {
        return new VwMiddleEndCar();
    }

    public function produceHeightEndCar()
    {
        return new VwHeightEndCar();
    }
}

class AudiCarFactory extends Factory
{
    public function produceLowEndCar()
    {
        return new AudiLowEndCar();
    }

    public function produceMiddleEndCar()
    {
        return new AudiMiddleEndCar();
    }

    public function produceHeightEndCar()
    {
        return new AudiHeightEndCar();
    }
}

$factory = new VwCarFactory();
$vwLowEndCar = $factory->produceLowEndCar();
var_dump($vwLowEndCar);


/*
 *  result =>   object(VwLowEndCar)#2 (0) { }
 * */