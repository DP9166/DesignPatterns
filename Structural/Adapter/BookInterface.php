<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 21:59
 */

namespace DesignPatterns\Structural\Adapter;


/*
 * 将一个类的接口转换成可应用的兼容接口
 * */

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}