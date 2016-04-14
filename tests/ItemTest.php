<?php

namespace ShoppingCart;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    public function testItem()
    {
        $item = new Item($itemId = 100);
    }

    public function testGetProductName()
    {
        $item = new Item($itemId = 100);
        $productName = $item->getProductName();
        $this->assertEquals($productName, 'Perfect PHP');
    }
    public function testGetPrice()
    {
        $item = new Item($itemId = 100);
        $price = $item->getPrice();
        $this->assertEquals($price, 3600);
    }
    public function testGetReleaseDate()
    {
        $item = new Item($itemId = 100);
        $releaseDate = $item->getReleaseDate();
        $this->assertEquals($releaseDate, new \DateTime('2010/11/01'));
    }
    public function testGetStockCount()
    {
        $item = new Item($itemId = 100);
        $stockCount = $item->getStockCount();
        $this->assertEquals($stockCount, 2);
    }

    public function testSetAmount()
    {
        $item = new Item($itemId = 100);
        $item->setAmount(2);
        $this->assertEquals($item->getAmount(), 2);
    }

    /**
     * @expectedException \Exception
     */
    public function testSetAmountOnError()
    {
        $item = new Item($itemId = 100);
        $item->setAmount(10);
    }
}
