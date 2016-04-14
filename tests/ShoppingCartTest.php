<?php

namespace ShoppingCart;

class ShoppingCartTest extends \PHPUnit_Framework_TestCase
{
    public function testCart()
    {
        $cart = new Cart();
    }

    public function testAdd()
    {
        $cart = new Cart();
        $item = new Item();
        $this->assertEquals($cart->count(), 0);
        $cart->add($item);
        $this->assertEquals($cart->count(), 1);
    }
}
