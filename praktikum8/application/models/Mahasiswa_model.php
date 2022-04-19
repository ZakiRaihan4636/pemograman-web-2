<?php

class Mahasiswa_model extends CI_Model
{
  // Buat Struktur data
  public $id;
  public $nama;
  public $nim;
  public $gender;
  public $tmp_lahir;
  public $tgl_lahir;


  public function predikat()
  {
    $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
    return $predikat;
  }
}
