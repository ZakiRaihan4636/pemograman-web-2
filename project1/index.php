<?php
require_once 'templating/header.php';
?>
<div class="wrapper">


  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UTS Project 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhamad Zaki Raihan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Praktikum 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum 1/array_asosiatif.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Array Asosiatif</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 1/array_function.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Array Function</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 1/array_siswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Array Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 1/vairable_konstan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Variable Kontanta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 1/variable_system.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Variable Sistem</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 1/variable_user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Variable User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Praktikum 2
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum 2/form_belanja.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Belanja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 2/form_nilai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Nilai</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Praktikum 3
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum 3/web dinamis/artikel1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Web Dinamis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 3/form_nilai.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Nilai function</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Praktikum 4
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum 4/data_lingkaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>lingkaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 4/persegiPanjang.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Persegi Panjang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 4/class_nilai_mahasiswa.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Nilai Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Praktikum 5
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum 5/atm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>atm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 5/atm2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>atm2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum 5/class_dispenser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Dispenser</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-weight"></i>
              <p>
                BMI
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hitung BMI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data BMI</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kalkulator BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Kalkulator BMI</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Hitung BMI</h3>
              </div>
              <div class="card-body">
                <!-- Date dd/mm/yyyy -->
                <form action="data.php" method="post">
                  <div class="form-group">
                    <label>Tanggal Periksa:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" name="tanggal_periksa" readonly value="<?= date('20y-d-m') ?>">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- Start Nama Lengkap -->
                  <div class="form-group">
                    <label>Nama Lengkap:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- End Nama Lengkap -->

                  <!-- Gender -->
                  <div class="form-group">
                    <label class="col-2">Gender:</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L">
                        <label for="gender_0" class="custom-control-label">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" required id="gender_1" type="radio" class="custom-control-input" value="P">
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <!-- End Gender -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Email:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                      <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- IP mask -->
                  <div class="form-group">
                    <label>Tinggi Badan:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-text-height"></i></span>
                      </div>
                      <input type="number" class="form-control" name="tb_badan" required>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->

                  <!-- IP mask -->
                  <div class="form-group">
                    <label>Berat Badan:</label>

                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-weight"></i></span>
                      </div>
                      <input type="number" class="form-control" name="bb_badan" required>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <button type="submit" name="kirim" class="btn btn-success">Hitung</button>
                </form>

              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

    </section>
    <!-- /.content -->
  </div>
  <?php require_once 'templating/footer.php' ?>