<?php
require_once 'templating/header.php';
require_once 'class_BMIPasien.php';

$pasien = new BMIPasien("Ahmad", "P001", 19, "Bogor", "Ahmad@gmail.com", "L", 69.8, 168, "2022-01-10");
$pasien2 = new BMIPasien("Rina", "P002", 19, "Bogor", "Rina@gmail.com", "P", 55.3, 165, "2022-01-11");
$pasien3 = new BMIPasien("Lutfi", "P003", 19, "Bogor", "Lutfi@gmail.com", "L", 45.2, 171, "2022-01-11");


$arr = [$pasien, $pasien2, $pasien3];


if (isset($_POST['kirim'])) {

  $tanggal_periksa = htmlspecialchars($_POST['tanggal_periksa']);
  $nama = $_POST['nama'];
  $bb = $_POST['bb_badan'];
  $tb = $_POST['tb_badan'];
  $gender = $_POST['gender'];


  $pasien4 = new BMIPasien($nama, "P004", 19, "Bogor", "Raihan@gmail.com", $gender, $bb, $tb, $tanggal_periksa);
  $arr = [$pasien, $pasien2, $pasien3, $pasien4];
}

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
            <h1>Data BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data BMI</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data BMI</h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead style="font-size:15px">
                <tr>
                  <style>
                    th {
                      text-align: center;
                      font-size: 12px;
                    }
                  </style>
                  <th colspan="1">No</th>
                  <th colspan="1">Tanggal Periksa</th>
                  <th>Kode</th>
                  <th>Nama Lengkap</th>
                  <th>Gender</th>
                  <th>Berat Badan (Kg)</th>
                  <th>Tinggi Badan (Cm)</th>
                  <th>Nilai BMI</th>
                  <th>Status BMI</th>
                </tr>
              </thead>

              <?php $nomor = 1; ?>
              <?php foreach ($arr as $bmi) : ?>
                <tbody>
                  <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $bmi->tanggal; ?></td>
                    <td><?= $bmi->kode; ?></td>
                    <td><?= $bmi->nama; ?></td>
                    <td><?= $bmi->gender; ?></td>
                    <td><?= $bmi->berat_badan; ?></td>
                    <td><?= $bmi->tinggi_badan; ?></td>
                    <td><?= $bmi->nilaiBMI(); ?></td>
                    <td><?= $bmi->statusBMI(); ?></td>
                  </tr>

                </tbody>
              <?php endforeach; ?>
            </table>
          </div>
        </div>

        <?php if (isset($_POST['kirim'])) : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-info">
                <div class="card-header">
                  <div class="card-title">Hasil Perhitungan</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-4 d-flex flex-wrap">
                      <?php if ($bmi->nilaiBMI() < 18.5 && $bmi->nilaiBMI() >= 0) {
                        echo "<img style=\"width:150px; margin-left:40px; height:150px;\" src=\"https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200220035556.png\" >";
                        echo "<img style=\"width: 170px; margin-left: 35px;\" class=\"mt-2\" src=\"https://www.gendhismanis.id/cni-content/themes/gendhismanis/images/bmi-ket-1.png\">";
                      } elseif ($bmi->nilaiBMI() > 18.5 && $bmi->nilaiBMI() <= 23.9) {
                        echo "<img style=\"width:150px; margin-left:40px; height:150px;\" src=\"https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200220035613.png\" >";
                        echo "<img style=\"width: 170px; margin-left: 35px;\" class=\"mt-2\" src=\"https://www.gendhismanis.id/cni-content/themes/gendhismanis/images/bmi-ket-2.png\">";
                      } elseif ($bmi->nilaiBMI() > 24.0 && $bmi->nilaiBMI() <= 26.9) {
                        echo "<img style=\"width:150px; margin-left:40px; height:150px;\" src=\"https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200220035708.png\" >";
                        echo "<img style=\"width: 170px; margin-left: 35px;\" class=\"mt-2\" src=\"https://www.gendhismanis.id/cni-content/themes/gendhismanis/images/bmi-ket-3.png\">";
                      } elseif ($bmi->nilaiBMI() > 27.0 && $bmi->nilaiBMI() <= 29.9) {
                        echo "<img style=\"width:150px; margin-left:40px; height:150px;\" src=\"https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200220035713.png\" >";
                        echo "<img style=\"width: 170px; margin-left: 35px;\" class=\"mt-2\" src=\"https://www.gendhismanis.id/cni-content/themes/gendhismanis/images/bmi-ket-4.png\">";
                      } elseif ($bmi->nilaiBMI() > 30) {
                        echo "<img style=\"width:150px; margin-left:40px; height:150px;\" src=\"https://www.gendhismanis.id/cni-content/uploads/modules/bmi/20200220035720.png\" >";
                        echo "<img style=\"width: 170px; margin-left: 35px;\" class=\"mt-2\" src=\"https://www.gendhismanis.id/cni-content/themes/gendhismanis/images/bmi-ket-5.png\">";
                      }  ?>
                    </div>
                    <div class="col-7">
                      <p class="mb-1">Hai, <b><?= $bmi->nama; ?></b></p>
                      <p class="mb-1">Berat dan Tinggi badan Anda adalah <b><?= $bb; ?></b> kg dan <b><?= $tb; ?></b> cm</p>
                      <p>Nilai BMI = <b><?= $bmi->nilaiBMI(); ?></b></p>
                      <!-- <p>Status BMI = <b><?= $bmi->statusBMI(); ?></b></p> -->
                      <?php if ($bmi->nilaiBMI() < 18.5 && $bmi->nilaiBMI() >= 0) {
                        echo "<p>Level Status BMI Anda adalah Kurang berat badan. Tingkatkan berat badan ideal Anda dengan berkonsultasi dengan ahli gizi Anda</p>";
                        echo "<p>Berat badan Anda bisa dikatakan ideal jika angka BMI Anda berada antara angka 18,5 sampai 22,9.</p>";
                      } elseif ($bmi->nilaiBMI() > 18.5 && $bmi->nilaiBMI() <= 23.9) {
                        echo "<p>Level Status BMI Anda adalah Normal(Ideal). Pertahankan berat badan Anda dengan makanan yang sehat dan berolahraga";
                        echo "<p>Berat badan Anda bisa dikatakan ideal jika angka BMI Anda berada antara angka 18,5 sampai 22,9.</p>";
                      } elseif ($bmi->nilaiBMI() > 24.0 && $bmi->nilaiBMI() <= 26.9) {
                        echo "<p>Level Status BMI Anda adalah Kelebihan berat Badan. Kurangi berat badan Anda dengan menjaga pola makan dan berolahraga</p>";
                        echo "<p>Berat badan Anda bisa dikatakan ideal jika angka BMI Anda berada antara angka 18,5 sampai 22,9.</p>";
                      } elseif ($bmi->nilaiBMI() > 27.0 && $bmi->nilaiBMI() <= 29.9) {
                        echo "<p>Level Status BMI Anda adalah Obesitas tingkat 1. Kurangi Berat badan Anda dengan berolahraga dan batasi asupan kalori sesuai anjurkan ahli gizi Anda</p>";
                        echo "<p>Berat badan Anda bisa dikatakan ideal jika angka BMI Anda berada antara angka 18,5 sampai 22,9.</p>";
                      } elseif ($bmi->nilaiBMI() > 30.0) {
                        echo "<p>Level Status BMI Anda adalah Obesitas tingkat 2. Kurangi Berat badan Anda dengan berolahraga dan batasi asupan kalori sesuai anjurkan ahli gizi Anda</p>";
                        echo "<p>Berat badan Anda bisa dikatakan ideal jika angka BMI Anda berada antara angka 18,5 sampai 22,9.</p>";
                      } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        <?php endif; ?>


    </section>

  </div>
  <?php require_once 'templating/footer.php' ?>