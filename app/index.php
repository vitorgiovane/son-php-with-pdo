<?php

require_once("connection.php");

$allProductsQuery = "select * from products;";
$singularProductQuery = "select * from products where id = {$_GET['id']};";

$allProductsStatement = $connection->query($allProductsQuery);
$singularProductStatement = $connection->query($singularProductQuery);

$singularProduct = $singularProductStatement->fetch(PDO::FETCH_OBJ);
echo $singularProduct->name . "<br>";
echo $singularProduct->description;
echo "=======================================";
foreach ($allProductsStatement as $product) {
  echo $product["name"] . "<br>";
}
