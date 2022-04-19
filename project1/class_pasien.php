<?php

class pasien
{

  public $nama;
  public $tmp;
  public $tgl;
  public $kode;
  public $email;
  public $gender;

  function __construct($nama, $kode, $tgl, $tmp, $email, $gender)
  {

    $this->nama = $nama;
    $this->kode = $kode;
    $this->tgl = $tgl;
    $this->tmp = $tmp;
    $this->gender = $gender;
    $this->email = $email;
  }
}
