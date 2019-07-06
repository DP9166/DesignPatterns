<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:19
 */

namespace DesignPatterns\Structural\Bridge;

/*
 * 创建抽象类
 * */
abstract class Service
{
    /*
     * 定义实现属性
     * */
    protected  $implementation;
    /*
     * 传入 FormatterInterface 实现类对象
     * */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /*
     * 和构造方法的作用相同
     * */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /*
     * 创建抽象方法 get()
     * */
    abstract public function get();
}