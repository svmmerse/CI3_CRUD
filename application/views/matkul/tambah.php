<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    FORM TAMBAH DATA MATKUL
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>

                    <div class="modal-body">
                        <form action="<?= base_url(); ?>matkul/tambah" method="post">
                            <input type="hidden" name="id_matkul" id="id_matkul">
                            <div class="form-group">
                                <label for="nm_matkul">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="nm_matkul" name="nm_matkul" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="kd_matkul">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" autocomplete="off" required>
                            </div>

                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <select class="form-control" id="ruangan" name="ruangan">
                                    <option value="Ruangan 1A">Ruangan 1A</option>
                                    <option value="Ruangan 1B">Ruangan 1B</option>
                                    <option value="Ruangan 2A">Ruangan 2A</option>
                                    <option value="Ruangan 2B">Ruangan 2B</option>
                                    <option value="Ruangan 3A">Ruangan 3A</option>
                                    <option value="Ruangan 3C">Ruangan 3B</option>
                                </select>
                            </div>

                            <a href="<?= base_url(); ?>matkul" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>