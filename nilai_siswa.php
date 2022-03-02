<?php

$proses = $_POST['proses'];
$nama = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_total = ($nilai_uts * 30 / 100) + ($nilai_uas * 35 / 100) + ($nilai_tugas * 35 / 100);

// Cek jika proses tidak kosong
if (!empty($proses)) {
  // echo '<br/>Nama : ' . $nama;
  // echo '<br/>Mata Kuliah : ' . $mata_kuliah;
  // echo '<br/>Nilai UTS : ' . $nilai_uts;
  // echo '<br/>Nilai UAS : ' . $nilai_uas;
  // echo '<br/>Nilai Tugas/Praktikum :' . $nilai_tugas;
}

// Lulus Atau tidak
if ($nilai_total > 55) {
  $pernyataan = "LULUS";
} else {
  $dinyatakan = "Tidak LULUS";
}



// Grade Nilai
if ($nilai_total > 100 or $nilai_total < 0) {
  $grade = "I";
} elseif ($nilai_total >= 85) {
  $grade = "A";
} elseif ($nilai_total >= 70) {
  $grade = "B";
} elseif ($nilai_total >= 56) {
  $grade = "C";
} elseif ($nilai_total >= 36) {
  $grade = "C";
} elseif ($nilai_total >= 0) {
  $grade = "E";
}

$grades = $grade;

switch ($grades) {
  case "A":
    $predikat = "Sangat Memuaskan";
    break;
  case "B":
    $predikat = "Memuaskan";
    break;
  case "C":
    $predikat = "Cukup";
    break;
  case "D":
    $predikat = "Kurang";
    break;
  case "I":
    $predikat =  "Tidak Ada";
    break;
  default:
    echo "Tidak ada Nilai";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <h3 class="mx-3">Nilai Siswa STT NURUL FIKRI</h3>
  <div class="container-fluid">
    <div class="tabel-responsive">
      <table class="table table-hover">
        <thead class="bg-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Nilai UTS</th>
            <th scope="col">Nilai UAS</th>
            <th scope="col">Nilai Tugas</th>
            <th scope="col">Nilai Total</th>
            <th scope="col">Dinyatakan</th>

          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $nama; ?></td>
            <td><?= $mata_kuliah; ?></td>
            <td><?= $nilai_uts; ?></td>
            <td><?= $nilai_uas; ?></td>
            <td><?= $nilai_tugas; ?></td>
            <td><?= $nilai_total; ?></td>
            <th><?= $pernyataan; ?></th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="container-fluid">
    <div class="d-flex justify-content-start">
      <div class="row">
        <div class="col-12">
          <div class="tabel-responsive">
            <table class="table table-hover">
              <thead class="bg-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Mata Kuliah</th>
                  <th scope="col">Nilai Total</th>
                  <th scope="col">Grade</th>
                  <th scope="col">Predikat</th>


                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $nama; ?></td>
                  <td><?= $mata_kuliah; ?></td>
                  <td><?= $nilai_total; ?></td>
                  <td><?= $grade; ?></td>
                  <td><?= $predikat; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
</body>

</html>