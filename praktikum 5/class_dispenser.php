<?php

class Dispenser
{
  protected $volume;
  protected $hargaSegelas;
  private $volumeGelas;
  public $namaMinuman;


  function  volume($vol)
  {
    $this->volume = $vol;
  }
}


class Minuman extends Dispenser
{
  public $uang;
  function __construct($uang, $namaMinuman, $volumeGelas, $harga)
  {
    $this->uang = $uang;
    $this->namaMinuman = $namaMinuman;
    $this->hargaSegelas = $harga;
    $this->volumeGelas = $volumeGelas;
  }

  function transaksi($uang)
  {
    $this->uang = $uang;
    return  $this->uang - $this->hargaSegelas;
  }

  function volumeSetelahdibeli()
  {
    $this->volume = $this->volume - $this->volumeGelas;
    return $this->volume;
  }

  // function isiUlang($isi)
  // {
  //   $this->volume + $this->isi = $isi;
  //   if ($this->volume > 4000) {
  //     return "Sudah Penuh";
  //   } elseif ($this->volume < 4000) {
  //     $this->hasil = $this->volume + $this->isi;
  //     return $this->hasil;
  //   }
  // }

  function cetak()
  {

    echo 'Uang Saat ini : ' . $this->uang . "<br>";
    echo 'kapasistas (volume) Dispenser : ' . $this->volume . 'ml' . "<br>";
    echo 'Nama Minuman : ' . $this->namaMinuman . "<br>";
    echo 'Harga Bayar Segelas Minuman : ' . $this->hargaSegelas . "<br>";
    echo 'Volume Dispenser setelah dibeli : ' . $this->volumeSetelahDibeli() . 'ml' . "<br>";
    echo 'Sisa uang: ' . $this->transaksi($this->uang);
    echo '<hr>';
  }
}

$minuman = new Minuman(4000, 'Coca Cola', 250, 1000);
$minuman->transaksi($minuman->uang);
$minuman->volume(4000);
// $minuman->isiUlang(1000);
$minuman->cetak();
