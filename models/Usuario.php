<?php

 require_once '../core/Model.php'; 

class Usuario extends Model
{

  public function getAll()
  {
    $stmt = $this->db->query('SELECT * FROM usuarios');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById($id)
  {
    $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE id= ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
