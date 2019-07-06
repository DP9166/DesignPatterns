<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-07-06
 * Time: 22:07
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}