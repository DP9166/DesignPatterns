<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:17
 */

namespace DesignPatterns\Structural\Decorator;

/*
 * 创建 WebService 服务类实现 RenderableInterface
 * 该类将在后面为装饰者实现数据的输入
 * */
class Webservice implements RenderableInterface
{
    private $data;

    // 传输字符串数据
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}