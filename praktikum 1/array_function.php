<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array funstions</title>
</head>
<body>
  <?php 
    $buahs = ["pepaya","apel","mangga","jambu"];
    // menghapus data paling akbir array
    array_pop($buahs);

    // menambahkan data pada akhir sebuah array
    array_push($buahs,"delima");

    // menghapus data paling awal senuah array
    array_shift($buahs);

    // menambahkan data di paling awal/depan sebuah array
    array_unshift($buahs, "naga","salak");
    
    foreach($buahs as $k=> $v){
      echo'<li>'.$k.' - ' . $v .'</li>';
      }
      echo '</ol>';
      // fungsi sort untuk mengurutkan data
      sort($buahs);
      echo '<hr/>';

      echo '<ol>';
      foreach($buahs as $k =>$v){
      echo '<li>'.$k.' - ' . $v .'</li>';
  }
      echo '</ol>';
  ?>
</body>
</html>