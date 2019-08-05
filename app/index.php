<?php

require_once "configurations.php";
require_once "Product.php";
require_once "ProductService.php";

$Product = new Product;
$Product
  ->setId(1)
  ->setName("SQL Course")
  ->setDescription("Corrupti cumque nisi, sint alias in explicabo pariatur.");

$product = new ProductService($db, $Product);

echo $product->update();
