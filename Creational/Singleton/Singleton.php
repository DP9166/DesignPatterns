<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 20:33
 */

namespace DesignPatterns\Creational\Singleton;


class Singleton
{
    private static $instance;

    /*
     *  通过懒加载获得实例
     *  */
    public static function getInstance(): Singleton
    {
        if (null == static::$instance) {
            static::$instance = new Static();
        }
        return static::$instance;
    }

    /*
     * 通过懒加载获得实例
     * */
    private function __construct()
    {
    }

    /*
     * 防止实例被克隆
     * */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /*
     *  防止反序列化
     * */
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}