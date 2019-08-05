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
  {
    $query = "INSERT INTO products (name, description) VALUES (:name, :description)";
    $statement = $this->db->prepare($query);
    $statement->bindValue(":name", $this->product->getName());
    $statement->bindValue(":description", $this->product->getDescription());
    $statement->execute();
    return $this->db->lastInsertId();
  }

  public function update()
  {
    $query = "UPDATE products SET name = :name, description = :description WHERE id = :id;";
    $statement = $this->db->prepare($query);
    $statement->bindValue(":name", $this->product->getName());
    $statement->bindValue(":description", $this->product->getDescription());
    $statement->bindValue(":id", $this->product->getId());
    $executionStatus = $statement->execute();
    return $executionStatus;
  }

  public function destroy(int $id)
  {
    $query = "DELETE FROM products WHERE id = :id;";
    $statement = $this->db->prepare($query);
    $statement->bindValue(":id", $id);
    $executionStatus = $statement->execute();
    return $executionStatus;
  }
}
