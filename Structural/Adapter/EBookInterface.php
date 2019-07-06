<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:06
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /*
     * 返回当前页和总页数
     * */
    public function getPage(): array;
}