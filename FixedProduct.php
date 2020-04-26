<?php

class FixedProduct extends Product
{
    public function __construct($name, $price)
    {
        $this->Product($name, $price);
        $this->setPrice($price);
    }
}
