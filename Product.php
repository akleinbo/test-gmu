<?php

class Product
{
    private $name;
    private $price;
    public function Product($name, $price) {
        $this->name = $name;
        $price = $this->price;
    }
    protected function setName($name) {
        return $this->name = ($name == $this->name);
    }
    protected function setPrice($price) {
        return $price = $this->price = $price;
    }
    final public function ShowNameAndPrice () {
        echo "This product is called {$this->name} and costs {$this->price} USD.";
    }
}
