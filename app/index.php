<?php

require_once "configurations.php";
require_once "Product.php";
require_once "ProductService.php";

$Product = new Product;
$Product->setId(1);

$product = new ProductService($db, $Product);

echo $product->destroy(4);
