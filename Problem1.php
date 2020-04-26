<?php

include ('Product.php');
include ('FixedProduct.php');

$prod = new FixedProduct("a book", "19.99");

echo $prod->ShowNameAndPrice();

