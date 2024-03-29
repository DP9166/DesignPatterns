<?php


namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\parts\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}