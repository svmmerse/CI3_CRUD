<div class="container">

  <div class="row mt-3">
    <div class="col-md-4">
      <a href="<?= base_url(); ?>matkul/tambah" class="btn btn-primary">Tambah Data Mata Kuliah</a>
    </div>
  </div>


  <div class="row mt-3 justify-content-end">
    <div class="col-md-4">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari matkul.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="col-md-12">
    <h3>Daftar Matkul</h3>
    <?php if (empty($matkul)) : ?>
      <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
          <use xlink:href="#exclamation-triangle-fill" />
        </svg>
        <div>
          Data matkul tidak ditemukan dimanapun!!!
        </div>
      </div>
    <?php endif; ?>
    <div class="table-responsive">
      <table class="table align-middle table-striped table-hover">
        <thead class="thead" style="background-color: brown; color:white">
          <tr>
            <th>
              <center>Kode Mata Kuliah</center>
            </th>
            <th>
              <center>Nama Mata Kuliah</center>
            </th>
            <th>
              <center>Ruangan</center>
            </th>>
            <th>
              <center>Action</center>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($matkul as $mkl) : ?>
            <tr>
              <td>
                <center><?= $mkl['kd_matkul']; ?></center>
              </td>
              <td>
                <center><?= $mkl['nm_matkul']; ?></center>
              </td>
              <td>
                <center><?= $mkl['ruangan']; ?></center>
              </td>
              <td>
                <center>
                  <a href="<?= base_url(); ?>matkul/detail/<?= $mkl['id_matkul']; ?>" class="btn btn-primary btn-sm">detail</a>
                  <a href="<?= base_url(); ?>matkul/ubah/<?= $mkl['id_matkul']; ?>" class="btn btn-success btn-sm tampilModalUbahMkl" data-toggle="modal" data-target="#formModal" data-id_matkul="<?= $mkl['id_matkul']; ?>">ubah</a>
                  <a href="<?= base_url(); ?>matkul/hapus/<?= $mkl['id_matkul']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Tersebut?');">hapus</a>
                </center>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>