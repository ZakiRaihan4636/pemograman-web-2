<?php

class Mahasiswa
{
  var $nim;
  var $nama;
  var $thn_angkatan;
  var $prodi;
  var $ipk;

  function __construct($nim, $nama)
  {
    $this->nim = $nim;
    $this->nama = $nama;
  }

  function predikat_ipk()
  {
    if ($this->ipk < 2.0) {
      return "cukup";
    } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
      return "Baik";
    } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
      return "memuaskan";
    } elseif ($this->ipk >= 3.75 && $this->ipk <= 4) {
      return "Cum Laude";
    }
  }
}


$mhs1 = new Mahasiswa(0110221110, "Muhamad Zaki Raihan");
$mhs1->nim = "0110221110";
$mhs1->thn_angkatan = "2021";
$mhs1->prodi = "TI";
$mhs1->ipk = 3;


$mhs2 = new Mahasiswa(0212, "Alissa Khairunnisa");
$mhs2->nim = "0212";
$mhs2->thn_angkatan = "2021";
$mhs2->prodi = "TI";
$mhs2->ipk = 3.8;



$mhs3 = new Mahasiswa(01011, "Rosaile Naurah");
$mhs3->nim = "0211";
$mhs3->thn_angkatan = "2019";
$mhs3->prodi = "TI";
$mhs3->ipk = 2.5;

$mhs4 = new Mahasiswa(0212, "Defghi Muhammad");
$mhs4->nim = "0212";
$mhs4->thn_angkatan = "2022";
$mhs4->prodi = "TI";
$mhs4->ipk = 3.46;

$mhs5 = new Mahasiswa(0213, "Andre Apriyana");
$mhs5->nim = "0213";
$mhs5->thn_angkatan = "2021";
$mhs5->prodi = "TI";
$mhs5->ipk = 3.9;


$result = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5, $mhs6, $mhs7];
var_dump($result);


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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    nav {
      height: 60px;
      align-items: center;
    }
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
    <div class="mt-4">
      <table class="table  table-bordered " id="tabel-data">
        <thead>
          <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Thn Angkatan</th>
            <th>IPK</th>
            <th>Predikat</th>
            <th>Action</th>
          </tr>
        </thead>

        <?php $no = 1 ?>
        <?php foreach ($result as $row) : ?>
          <tbody>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->nim; ?></td>
              <td><?= $row->nama; ?></td>
              <td><?= $row->prodi; ?></td>
              <td><?= $row->thn_angkatan; ?></td>
              <td><?= $row->ipk; ?></td>
              <td><?= $row->predikat_ipk(); ?></td>
              <td>
                <a href="">lihat</a> |
                <a href="">Edit</a>
              </td>
            </tr>



          </tbody>
        <?php endforeach; ?>
        <script>
          $(document).ready(function() {
            $('#tabel-data').DataTable();
          });
        </script>
      </table>
    </div>
    <footer style="box-shadow: -0px -1px silver;" class="container bottom-0 position-absolute">
      <span style="font-weight: bold;font-size:25px">Lab Pemograman Web Lanjutan</span><br>
      <span>Dosen: Sirojul Munir S.SI,M.Kom</span><br>
      <span>STT-NF-Kampus B</span>
    </footer>

  </div>
</body>

</html>