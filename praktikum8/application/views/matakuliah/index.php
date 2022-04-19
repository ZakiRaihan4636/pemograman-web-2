<div class="container-fluid mt-2">
  <div class="col-md-12">
    <h3>Daftar Matakuliah</h3>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Jumlah SKS</th>
      </tr>
    </thead>
    <tbody>

      <?php $no = 1; ?>
      <?php foreach ($list_mtkl as $mtkl) : ?>
        <tr>
          <td> <?= $no++; ?> </td>
          <td> <?= $mtkl->nama; ?> </td>
          <td> <?= $mtkl->kode; ?> </td>
          <td> <?= $mtkl->sks; ?> </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>