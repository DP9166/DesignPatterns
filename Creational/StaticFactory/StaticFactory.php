<?php


namespace DesignPatterns\Creational\StaticFactory;

/*
 *  静态工厂
 *
 * 1. 静态意味着全局状态, 因为它不能被模拟进行测试, 所有它是有弊端的
 * 2. 不能被分类或模拟或有多个不同的实例
 *
 * 与抽象工厂模式的区别在于, 只使用了一个静态方法来创建所有类型对象
 * */

class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }

        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('unknown format given');
    }
}