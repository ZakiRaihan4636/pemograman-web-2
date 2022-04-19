<?php 

$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar nilai mahasiswa</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1 class="mt-2 ms-2">Daftar mahasiswa</h1>
<div class="container-fluid ">
<table class="table">
  <thead class="table-dark">
    <th>No</th>
    <th>Nim</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Tugas</th>
    <th>Nilai Akhir</th>
  </thead>
  <?php 
  $nomor =1;
  foreach($ar_nilai as $ns) :
  ?>
  <tbody>
    <td></td>
    <td><?= $ns['nim'] ?></td>
    <td><?= $ns['uts']; ?></td>
    <td><?= $ns['uas']; ?></td>
    <td><?= $ns['tugas']; ?></td>
    <?php 
    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>'; ?>
  </tbody>
  <?php endforeach; ?>
</table>
</div>

<form action="">
  
</form>

</body>
</html>