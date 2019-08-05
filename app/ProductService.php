<?php

require_once "ConnectionInterface.php";
require_once "ProductInterface.php";

class ProductService
{
  private $db;
  private $product;

  public function __construct(ConnectionInterface $db, ProductInterface $product)
  {
    $this->db = $db->connect();
    $this->product = $product;
  }

  public function index()
  {
    $query = "SELECT * FROM products;";
    $statement = $this->db->prepare($query);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function store()
  { }

  public function update()
  { }

  public function destroy()
  { }
}
