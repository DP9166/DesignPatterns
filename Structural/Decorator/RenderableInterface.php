<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:16
 */

namespace DesignPatterns\Structural\Decorator;


/*
 * 创建渲染接口
 * 这里的装饰方法 renderData() 返回的是字符串格式数据
 * */
interface RenderableInterface
{
    public function renderData(): string;
}

