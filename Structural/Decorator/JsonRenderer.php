<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:24
 */

namespace DesignPatterns\Structural\Decorator;


class JsonRenderer extends RenderDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}