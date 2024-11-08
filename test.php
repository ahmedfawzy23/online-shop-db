<?php
require_once 'classes/Product.php';

$product = new Product();

print_r($product->getOne(1));