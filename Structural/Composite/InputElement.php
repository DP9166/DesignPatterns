<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:54
 */

namespace DesignPatterns\Structural\Composite;


class InputElement implements RenderableInterface
{
    public function render(): string
    {
        return '<input type=="text" />';
    }
}