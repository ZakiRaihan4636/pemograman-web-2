<?php

class bmi
{
  public $berat_badan;
  public $tinggi_badan;
  public static $tbc = 100;


  function __construct($bb, $tb)
  {
    $this->berat_badan = $bb;
    $this->tinggi_badan = $tb;
  }


  function nilaiBMI()
  {
    $tinggi = $this->tinggi_badan / self::$tbc;
    $this->bmi = $this->berat_badan / ($tinggi * $tinggi);
    return number_format($this->bmi, 1);
  }

  function statusBMI()
  {
    if ($this->bmi < 18.5 && $this->bmi  >= 0) {
      return "kekurangan berat badan";
    } else if ($this->bmi > 18.5 && $this->bmi <= 23.9) {
      return "Normal(ideal)";
    } else if ($this->bmi > 24.0 && $this->bmi <= 26.9) {
      return "Kelebihan berat badan";
    } else if ($this->bmi > 27.0 && $this->bmi <= 29.9) {
      return "Kegemukan (obesitas1)";
    } else if ($this->bmi > 30.0) {
      return "Kegemukan (obesitas2)";
    } else {
      return "Masukan data dengan benar";
    }
  }
}
