<div class="container">

  <!-- SET FLASH -->
  <?php if ($this->session->flashdata()) : ?>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade in show" role="alert">
          Data Mahasiswa <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- BUTTON -->
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
    </div>
  </div>

  <!-- CARI DATA -->
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- BODY DATA -->
  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Daftar Mahasiswa</h3>
      <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            Data mahasiswa tidak ditemukan dimanapun!!!
          </div>
        </div>
      <?php endif; ?>
      <ul class="list-group">
        <?php foreach ($mahasiswa as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama']; ?>
            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbahMhs" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>