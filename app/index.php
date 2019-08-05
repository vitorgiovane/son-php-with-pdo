<?php

require_once "configurations.php";
require_once "Product.php";
require_once "ProductService.php";

$product = new Product;
$productService = new ProductService($db, $product);

var_dump($productService->index());
