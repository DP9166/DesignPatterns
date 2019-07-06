<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:36
 */

namespace DesignPatterns\Structural\Facade;


interface BiosInterface
{
    /*
     * 声明执行方法
     * */
    public function execute();

    /*
     * 声明等待密码输入方法
     * */
    public function waitForKeyPress();

    /*
     * 声明登录方法
     * */
    public function launch(OsInterface $os);

    /*
     * 声明关机方法
     * */
    public function powerDown();
}