<?php

class Model
{
  protected $db;
  private function __construct()
  {
    return $this->db = Database::getInstance()->getConnection();
  }
}
