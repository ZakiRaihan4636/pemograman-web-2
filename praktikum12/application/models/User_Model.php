<?php
class User_Model extends CI_Model
{

  // Buat Struktur data
  private $table = "user";

  public function getAll()
  {
    $query = $this->db->get($this->table);
    return $query->result();
  }


  // function Predikat($ipk)
  // {
  //     return ($ipk >= 3.75) ? "Cumlaude" : "Baik";
  // }


  public function findById($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get($this->table);
    return $query->row();
  }

  public function login($uname, $pass)
  {
    $sql = "SELECT * FROM user WHERE username=? and password=MD5(?)";
    $data = [$uname, $pass];
    $query = $this->db->query($sql, $data);
    return $query->row();
  }
}
