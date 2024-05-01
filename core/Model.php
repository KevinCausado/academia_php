<?php

 abstract class Model {
  protected $db;

  private function __construct()
  {
    $this->db = Database::getInstance()->getConection();
  }
 }
