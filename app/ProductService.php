<?php

require_once "ConnectionInteface.php";
require_once "ProductInteface.php";

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
  { }

  public function store()
  { }

  public function update()
  { }

  public function destroy()
  { }
}
