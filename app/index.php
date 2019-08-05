<?php

require_once("connection.php");

$allProductsQuery = "select * from products;";
$singularProductQuery = "select * from products where id = :id;";

$allProductsStatement = $connection->query($allProductsQuery);
$singularProductStatement = $connection->prepare($singularProductQuery);
$singularProductStatement->bindValue(":id", $_GET['id']);
$singularProductStatement->execute();

$singularProduct = $singularProductStatement->fetch(PDO::FETCH_OBJ);
echo $singularProduct->name . "<br>";
echo $singularProduct->description;
echo "<br>=======================================<br>";
foreach ($allProductsStatement as $product) {
  echo $product["name"] . "<br>";
}
