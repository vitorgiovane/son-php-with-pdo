<?php

require_once "ConnectionInterface.php";
class Connection implements ConnectionInterface
{
  private $host;
  private $port;
  private $database;
  private $user;
  private $password;

  public function __construct($prefix, $host, $port, $database, $user, $password)
  {
    $this->prefix = $prefix;
    $this->host = $host;
    $this->port = $port;
    $this->database = $database;
    $this->user = $user;
    $this->password = $password;
  }

  public function connect()
  {
    try {
      $dataSourceName = "$this->prefix:host=$this->host;port=$this->port;dbname=$this->database;";
      $connection = new \PDO($dataSourceName, $this->username, $this->password);
      return $connection;
    } catch (\PDOException $exception) {
      echo "<strong>Exception code:</strong> {$exception->getCode()}<br>";
      echo "<strong>Message:</strong> {$exception->getMessage()}";
      exit;
    }
  }
}
