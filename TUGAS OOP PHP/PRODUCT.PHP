<?php

class Product
{
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function calculateDiscountedPrice()
    {
        $discountedPrice = $this->price - ($this->price * $this->discount / 100);
        return $discountedPrice;
    }
}