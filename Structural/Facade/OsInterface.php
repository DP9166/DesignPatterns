<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:38
 */

namespace DesignPatterns\Structural\Facade;


interface OsInterface
{
    /**
     * 声明关机方法。
     */
    public function halt();

    /**
     * 声明获取名称方法，返回字符串格式数据。
     */
    public function getName(): string;
}