<?php

class NilaiMahasiswa
{

  var $nama;
  var $nim;
  var $nilai;

  function __construct($nama, $nim, $nilai)
  {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->nilai = $nilai;
  }

  function grade()
  {
    if ($this->nilai > 55) {
      return "LULUS";
    } else {
      return "Tidak LULUS";
    }
  }

  function Hasil()
  {
    if ($this->nilai > 100 or $this->nilai < 0) {
      return "I";
    } elseif ($this->nilai >= 85) {
      return "A";
    } elseif ($this->nilai >= 70) {
      return "B";
    } elseif ($this->nilai >= 56) {
      return "C";
    } elseif ($this->nilai >= 36) {
      return "C";
    } elseif ($this->nilai >= 0) {
      return "E";
    }
  }
}

$mahasiswa = new NilaiMahasiswa("nama", 0, 0);

$mahasiswa->nama = $_POST['nama'];
$mahasiswa->nim = $_POST['nim'];
$mahasiswa->nilai = $_POST['nilai'];

var_dump($mahasiswa->hasil());
var_dump($mahasiswa->grade());



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form test</title>
</head>

<body>
  <h2>Form Nilai</h2>

  <form action="" method="post">
    <label for="nama">nama</label>
    <input type="text" name="nama" id="nama">

    <label for="nim">nim</label>
    <input type="text" name="nim" id="nim">

    <label for="nilai">nilai</label>
    <input type="number" name="nilai" id="nilai">

    <button type="submit" name="tombol">Kririm</button>
  </form>

  <h2>Nama : <?= $mahasiswa->nama; ?></h2>
  <h2>Nim : <?= $mahasiswa->nim; ?></h2>
  <h2>Nilai : <?= $mahasiswa->nilai; ?></h2>
  <h2>Grade : <?= $mahasiswa->grade(); ?></h2>
  <h2>Hasil Ujian : <?= $mahasiswa->hasil(); ?></h2>
</body>

</html>