<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 17:32
 */

namespace DesignPatterns\Creational\FactoryMethod;


interface LoggerFactory
{
    public function createLogger(): logger;
}