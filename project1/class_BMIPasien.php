<?php

require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BMIPasien extends bmi
{
  public $tanggal;

  function __construct($nama, $kode, $tgl, $tmp, $email, $gender, $bb, $tb, $tanggal)
  {
    parent::__construct($bb, $tb);
    $this->tanggal = $tanggal;
    $this->nama = $nama;
    $this->kode = $kode;
    $this->tgl = $tgl;
    $this->tmp = $tmp;
    $this->email = $email;
    $this->gender = $gender;
  }
}
