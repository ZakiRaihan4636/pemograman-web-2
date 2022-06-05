<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ubah Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ubah Data Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-body">
          <?php $hidden =  ['idedit' => $mhs_edit->nim]; ?>
          <?php echo form_open('mahasiswa/save', '', $hidden); ?>
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div>
                <input id="nim" name="nim" value="<?= $mhs_edit->nim ?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-user-alt"></i>
                  </div>
                </div>
                <input id="nama" name="nama" type="text" value="<?= $mhs_edit->nama ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
              <?php
              $cheked_l = ($mhs_edit->gender = "L") ? "checked" : "";
              $cheked_p = ($mhs_edit->gender = "P") ? "checked" : "";
              ?>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" <?= $cheked_l ?>>
                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" <?= $cheked_p ?>>
                <label for="gender_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label" for="tgl_lahir">Tanggal Lahir</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="<?= $mhs_edit->tgl_lahir ?>" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-paper-plane"></i>
                  </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="<?= $mhs_edit->tmp_lahir ?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="select" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
              <select id="select" name="prodi" class="custom-select" required="required">
                <option value="SI">Sistem Informasi</option>
                <option value="TI">Teknik Informatika</option>
                <option value="BD">Bisnis Digital</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-text-height"></i>
                  </div>
                </div>
                <input id="ipk" name="ipk" type="text" value="<?= $mhs_edit->ipk ?>" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>