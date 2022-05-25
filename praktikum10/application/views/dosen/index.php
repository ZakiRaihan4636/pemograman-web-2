	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Data Dosen</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Data Dosen</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Kelola Data Dosen</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">

							<a href="<?php echo base_url('Dosen/create') ?>" class="btn btn-primary mb-3">Tambah Data</a>

							<thead>
								<tr>
									<th>No</th>
									<th>NIP</th>
									<th>Nama</th>
									<th>Gender</th>
									<th>Pendidikan Akhir</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor = 1;
								foreach ($list_dsn as $dsn) : ?>
									<tr>
										<td><?= $nomor++; ?></td>
										<td><?= $dsn->nidn; ?></td>
										<td><?= $dsn->nama; ?></td>
										<td><?= $dsn->gender; ?></td>
										<td><?= $dsn->pendidikan_akhir; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<div class="row">
				</div>
				<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
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