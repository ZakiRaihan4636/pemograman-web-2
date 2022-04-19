<div class="container-fluid mt-2">
  <div class="col-md-12">
    <h3>Daftar Dosen</h3>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Pendidikan Terakhir</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_dsn as $dsn) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $dsn->nidn; ?> </td>
          <td> <?= $dsn->nama; ?> </td>
          <td> <?= $dsn->gender; ?> </td>
          <td> <?= $dsn->pendidikan; ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>