<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 17:12
 */

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\SimpleFactory\Bicycle;
use DesignPatterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}