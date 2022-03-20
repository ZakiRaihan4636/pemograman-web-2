<?php

class NilaiMahasiswa
{

  var $matakuliah;
  var $nim;
  var $nilai;

  function __construct($matkul, $nim, $nilai)
  {
    $this->matakuliah = $matkul;
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
$mahasiswa = new NilaiMahasiswa("Data Warehouse", 0, 0);

if (isset($_POST['tombol'])) {

  $mahasiswa->matakuliah = $_POST['matkul'];
  $mahasiswa->nim = $_POST['nim'];
  $mahasiswa->nilai = $_POST['nilai'];
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>

  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">WEB02</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Review PHP
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PHP5 OOP
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark " type="submit">Submit</button>
            </form>
          </ul>


          <ul class="navbar-nav d-flex mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid mt-2">
      <h1>Form</h1>
      <hr>
      <div class="row">
        <div class="col-12">
          <div style="width:50%; margin:auto;" class="card-body">
            <form method="post" action="">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                  <input id="nama" name="nim" placeholder="NIM" required type="text" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Pilih MK</label>
                <div class="col-8">
                  <select id="matkul" name="matkul" class="custom-select">
                    <option value="Data warehouse">Data Warehouse</option>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemograman Web 2">Pemograman Web 2</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                  <input id="nilai_uts" required name="nilai" required placeholder="Nilai" type="number" class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <button type="submit" name="tombol" class="btn btn-success">kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <hr>
      <div class="row mx-1">
        <span>Nim: <?= $mahasiswa->nim; ?> </span>
        <span>Nama Mata kuliah: <?= $mahasiswa->matakuliah; ?> </span>
        <span>Nilai : <?= $mahasiswa->nilai; ?> </span>
        <span>Hasil Ujian: <?= $mahasiswa->hasil(); ?></span>
        <span>Grade: <?= $mahasiswa->grade(); ?> </span>
      </div>
      <hr>
    </div>
    <footer style="position:relative;" class="bottom-0  container">
      <span style="font-weight: bold;font-size:25px">Lab Pemograman Web Lanjutan</span><br>
      <span>Dosen: Sirojul Munir S.SI,M.Kom</span><br>
      <span>STT-NF-Kampus B</span>
    </footer>

  </div>

</body>

</html>