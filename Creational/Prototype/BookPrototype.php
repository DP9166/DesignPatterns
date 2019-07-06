<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 21:51
 */

namespace DesignPatterns\Creational\Prototype;


class BookPrototype
{
    protected $title;

    protected $category;

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function getTitle(): title
    {
        return $this->title;
    }

    public function setTitle($title): title
    {
        $this->title = $title;
    }
}