<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    FORM UBAH DATA MATKUL
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_matkul" value="<?= $matkul['id_matkul']; ?>">
                        <div class="form-group">
                            <label for="nm_matkul">Nama Matkul</label>
                            <input type="text" class="form-control" id="nm_matkul" name="nm_matkul" value="<?= $matkul['nm_matkul']; ?>" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="kd_matkul">Kode Matkul</label>
                            <input type="text" class="form-control" id="kd_matkul" value="<?= $matkul['kd_matkul']; ?>" name="kd_matkul" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <select class="form-control" id="ruangan" name="ruangan" value="<?= $matkul['ruangan']; ?>">
                                <?php foreach ($ruangan as $r) : ?>
                                    <?php if ($r == $matkul['ruangan']) : ?>
                                        <option value="<?= $r; ?>" selected><?= $r; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $r; ?>"><?= $r; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url(); ?>matkul" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>