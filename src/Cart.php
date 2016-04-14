<?php

namespace ShoppingCart;

class Cart
{

    private $items = [];

    public function add(Item $item)
    {
        $this->items[] = $item;
    }

    public function count()
    {
        return count($this->items);
    }
}
