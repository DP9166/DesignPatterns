<?php
/**
 * Created by PhpStorm.
 * User: duanpei
 * Date: 2019-06-24
 * Time: 13:38
 */

namespace DesignPatterns\Creational\AbstractFactory;

class ShippableProduct implements Product
{
    /*
     * 产品价格
     * */
    private $productPrice;
    /*
     * 运输费用
     * */
    private $shippingCosts;

    public function __construct(int $productPrice, int $shippingCosts)
    {
        $this->productPrice = $productPrice;
        $this->shippingCosts = $shippingCosts;
    }

    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingCosts;
    }
}
