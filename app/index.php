<?php

require_once("connection.php");

$allProductsQuery = "select * from products;";
$singularProductQuery = "select * from products where id = 2;";

$allProductsStatement = $connection->query($allProductsQuery);
$singularProductStatement = $connection->query($singularProductQuery);

echo "<pre>";
$singularProduct = $singularProductStatement->fetch(PDO::FETCH_OBJ);
echo $singularProduct->name . "<br>";
echo $singularProduct->description;
