<?php

namespace ShoppingCart;

class CartTest extends \PHPUnit_Framework_TestCase
{
    public function testCart()
    {
        $cart = new Cart();
    }

    public function testAdd()
    {
        $cart = new Cart();
        $item = new Item($itemId = 100);
        $this->assertEquals($cart->count(), 0);
        $cart->add($item);
        $this->assertEquals($cart->count(), 1);
    }
}
