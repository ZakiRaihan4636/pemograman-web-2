<?php 

$buahs = ["pepaya","pisang","jambu","jeruk"];
echo $buahs[0];
// Jumlah data
echo "<br> Jumlah data :". count($buahs);

// cetak seluruh buah
foreach ($buahs as $buah){
  echo "<br>".$buah;
}

// Tambah data
$buahs[] = "apel";
foreach ($buahs as $buah){
  echo "<br>".$buah;
}

// hapus buah index ke 1
unset($buahs[1]);
// ubah buah index ke 2 menjadi Manggis
$buahs[2]="Manggis";
// cetak seluruh buah dengan index nya
echo '<ul>';
foreach($buahs as $k => $v){
echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';




?>