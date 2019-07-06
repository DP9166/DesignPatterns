<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:02
 */

namespace DesignPatterns\Structural\Adapter;


/*
 * 适配器， 它实现了 BookInterface
 *  因此不必更改客户端代码
 * */

class EBookAdapter implements BookInterface
{
    private $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /*
     *  进行了适当的转换
     * */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

}