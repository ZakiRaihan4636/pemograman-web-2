<div class="container-fluid mt-2">
  <div class="col-md-12">
    <h3>Daftar Mahasiswa</h3>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>IPK</th>
        <th>Predikat</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_mhs as $mhs) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $mhs->nim; ?> </td>
          <td> <?= $mhs->nama; ?> </td>
          <td> <?= $mhs->gender; ?> </td>
          <td> <?= $mhs->ipk; ?> </td>
          <td> <?= $mhs->predikat(); ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>