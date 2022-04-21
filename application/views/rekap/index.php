<div class="container">

  <!-- SET FLASH -->
  <?php if ($this->session->flashdata()) : ?>
    <div class="row mt-3">
      <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade in show" role="alert">
          Data Rekap <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <!-- BUTTON -->
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= base_url(); ?>rekap/tambah" class="btn btn-primary">Tambah Data rekap</a>
    </div>
  </div>

  <!-- CARI DATA -->
  <div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="cari rekap.." name="keyword" id="keyword" autocomplete="off">
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
      <h3>Daftar rekap</h3>
      <?php if (empty($rekap)) : ?>
        <div class="alert alert-warning d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            Data rekap tidak ditemukan dimanapun!!!
          </div>
        </div>
      <?php endif; ?>
      <ul class="list-group">
        <?php foreach ($rekap as $rkp) : ?>
          <li class="list-group-item">
            <?= $rkp['nm_mhs']; ?>
            <a href="<?= base_url(); ?>rekap/hapus/<?= $rkp['id_rekap']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">hapus</a>
            <!-- <a href="<?= base_url(); ?>rekap/ubah/<?= $rkp['id_rekap']; ?>" class="badge badge-success float-right tampilModalUbahMhs" data-toggle="modal" data-target="#formModal" data-id="<?= $rkp['id_rekap']; ?>">ubah</a> -->
            <a href="<?= base_url(); ?>rekap/detail/<?= $rkp['id_rekap']; ?>" class="badge badge-primary float-right">detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>