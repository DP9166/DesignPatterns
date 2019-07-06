<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:51
 */

namespace DesignPatterns\Structural\Composite;


class Form implements RenderableInterface
{
    private $elements;

    /*
     * 遍历所有元素, 并对他们调用 render() 方法, 然后返回表单的完整的解析表达
     *
     * */
    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</form>';

        return $formCode;
    }

    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
}