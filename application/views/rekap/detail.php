<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $rekap['nm_mhs']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $rekap['nrp']; ?></h6>
      <p class="card-text"><?= $rekap['nm_matkul']; ?></p>
      <p class="card-text"><?= $rekap['kd_matkul']; ?></p>
      <a href="<?= base_url(); ?>rekap" class="card-link">Kembali</a>
    </div>
  </div>

</div>