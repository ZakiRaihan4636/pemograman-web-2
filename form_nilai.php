<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
  * {
    margin: 0;
    padding: 0;
  }

  footer {
    padding-top: 10px;
    padding-bottom: 0px;

  }
</style>

<body>
  <nav class=" navbar-light bg-light px-3 pb-1">
    <a class="navbar-brand ">Sistem Penilaian </a>
  </nav>
  <h4 class="px-3">Form Nilai Siswa</h4>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 pb-5">
        <hr>
        <div style="width:50%; margin:auto;" class="card-body">
          <form method="post" action="nilai_siswa.php">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama lengkap</label>
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" required type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                  <option value="DDP">Dasar Dasar Pemograman</option>
                  <option value="BDI">Basis Data</option>
                  <option value="WEB1">Pemograman Web</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
              <div class="col-8">
                <input id="nilai_uts" required name="nilai_uts" required placeholder="Nilai UTS" type="number" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
              <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" required placeholder="Nilai UAS" type="number" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
              <div class="col-8">
                <input id="text" name="nilai_tugas" required placeholder="Nilai Tugas" type="number" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <input type="submit" name="proses" value="daftar" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <footer class="bg-light  ">
    <!-- Copyright -->
    <div class="text-dark p-2">
      Develop by @Muhamad Zaki Raihan © 2022
    </div>
    <!-- Copyright -->
  </footer>
</body>

</html>