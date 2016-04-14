<?php

namespace ShoppingCart;

class Item
{
    private $items = [
        100 => [
            'productName' => 'Perfect PHP',
            'price'       => 3600,
            'releaseDate' => '2010/11/01',
            'stockCount'  => 2,
        ],
        200 => [
            'productName' => 'Perfect PHP II',
            'price'       => 7200,
            'releaseDate' => '2020/11/01',
            'stockCount'  => 20,
        ],
    ];
    private $productName;
    private $price;
    private $releaseDate;
    private $stockCount;

    public function __construct($itemId) {
        $item = $this->items[$itemId];
        $this->productName = $item['productName'];
        $this->price       = $item['price'];
        $this->releaseDate = new \DateTime($item['releaseDate']);
        $this->stockCount  = $item['stockCount'];
    }
    public function getProductName() {
        return $this->productName;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getReleaseDate() {
        return $this->releaseDate;
    }
    public function getStockCount() {
        return $this->stockCount;
    }
}
