<?php

require_once '../core/Database.php';

abstract class Model
{
  protected $db;
  public function __construct()
  {
    return $this->db = Database::getInstance()->getConnection();
  }
}
