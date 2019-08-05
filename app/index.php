<?php

require_once "configurations.php";
require_once "Product.php";
require_once "ProductService.php";

$product = new Product;
$product->setName("PHP Course")
  ->setDescription("Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cumque nisi, sint alias in explicabo pariatur.");

$productService = new ProductService($db, $product);

var_dump($productService->store());
