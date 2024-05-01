<?php

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
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
