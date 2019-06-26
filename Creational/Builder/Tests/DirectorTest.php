<?php


namespace DesignPatterns\Creational\Builder\Tests;


use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\parts\Car;
use DesignPatterns\Creational\Builder\parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;

use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuilderCar()
    {
        $carBuilder = new CarBuilder();
        $newCehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newCehicle);
    }
}