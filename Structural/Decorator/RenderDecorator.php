<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:20
 */

namespace DesignPatterns\Structural\Decorator;


abstract class RenderDecorator implements RenderableInterface
{
    /*
     * 定义渲染接口变量
     * */
    protected $wrapped;

    /*
     * 传入渲染接口类对象
     * */
    public function __construct(RenderableInterface $renderable)
    {
        $this->wrapped = $renderable;
    }
}