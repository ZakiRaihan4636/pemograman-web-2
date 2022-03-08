<?php

require_once 'libfungsi.php';

$proses = $_POST['proses'];
$nama = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_total = ($nilai_uts * 30 / 100) + ($nilai_uas * 35 / 100) + ($nilai_tugas * 35 / 100);

$hasil_ujian = kelulusan($nilai_total);
echo 'Dinyatakan: ' . $hasil_ujian . '</br>';

$grade = grade($nilai_total);
echo 'Grade: ' . $grade . '</br>';

$predikat = predikat($grade);
echo 'Predikat: ' . $predikat;





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
            <th><?= $hasil_ujian; ?></th>
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
                  <td><?= $hasil_ujian; ?></td>
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