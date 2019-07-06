<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 23:22
 */

namespace DesignPatterns\Structural\Decorator;


class XmlRenderer extends RenderDecorator
{
    public function renderData(): string
    {
        $doc = new \DOMDocument();

        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}