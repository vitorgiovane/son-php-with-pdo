<?php

require_once("connection.php");

$allProductsQuery = "select * from products;";
$allProductsStatement = $connection->query($allProductsQuery);

var_dump($allProductsStatement->fetchAll(PDO::FETCH_OBJ));
