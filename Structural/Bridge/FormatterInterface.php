<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:16
 */

namespace DesignPatterns\Structural\Bridge;

/*
 * 创建格式化接口
 * */
interface FormatterInterface
{
    public function format(string $text);
}