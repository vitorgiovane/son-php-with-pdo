<?php

require_once("connection.php");

$insertQuery = "INSERT INTO products (name, description) VALUES('Maverick','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula consectetur felis.');";
$numberOfAffectedLines = $connection->exec($insertQuery);
var_dump($numberOfAffectedLines);
