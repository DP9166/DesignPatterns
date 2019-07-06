<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:22
 */

namespace DesignPatterns\Structural\Bridge;


/*
 * 抽象化角色 (Service)
 * 修正抽象化角色 (HelloWorldService)
 * 实现化角色 (FormatterInterface)
 * 具体实现化角色 (HtmlFormatter, PlainTextFormatter)
 *
 *
 * */

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}