<?php

if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
  $dotenv->load();
} else {
  echo "<h2>File <strong>/vendor/autoload.php</strong> not found!</h2>
	<p>Run the <strong>composer install</strong> command on a terminal.</p>";
  die;
}

$dbPrefix = getenv("DB_PREFIX");
$dbHost = getenv("DB_HOST");
$dbPort = getenv("DB_PORT");
$dbName = getenv("DB_DATABASE");
$dataSourceName = "$dbPrefix:host=$dbHost;port=$dbPort;dbname=$dbName;";
$userName = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$connection = new \PDO($dataSourceName, $userName, $password);
