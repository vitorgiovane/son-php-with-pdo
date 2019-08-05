<?php

require_once "Connection.php";
require_once "Product.php";
require_once "ProductService.php";

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
  $dotenv->load();
} else {
  echo "<h2>File <strong>/vendor/autoload.php</strong> not found!</h2>
  <p>Run the <strong>composer install</strong> command on a terminal.</p>";
  die;
}

$prefix = getenv("DB_PREFIX");
$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$database = getenv("DB_DATABASE");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$connection = new Connection($prefix, $host, $port, $database, $user, $password);
