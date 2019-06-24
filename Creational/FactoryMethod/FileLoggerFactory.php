<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 17:35
 */

namespace DesignPatterns\Creational\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    private $filepath;

    public function __construct(string $filepath)
    {
        $this->filepath = $filepath;
    }

    public function createLogger(): logger
    {
        return new  FileLogger($this->filepath);
    }
}