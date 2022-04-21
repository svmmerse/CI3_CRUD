<div class="container mt-5">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $matkul['nm_matkul']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $matkul['kd_matkul']; ?></h6>
      <p class="card-text"><?= $matkul['ruangan']; ?></p>
      <a href="<?= base_url(); ?>matkul" class="card-link">Kembali</a>
    </div>
  </div>

</div>