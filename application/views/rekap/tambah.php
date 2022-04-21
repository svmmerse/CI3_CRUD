<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    FORM TAMBAH DATA REKAP
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url(); ?>rekap/tambah" method="post">
                        <input type="hidden" name="id_rekap" id="id_rekap">

                        <div class="form-group">
                            <label for="nm_mhs">Nama Mahasiswa</label>
                            <select class="form-control" name="nm_mhs">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "db_mvc");
                                $result1 = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nama = nama AND nrp =nrp");
                                while ($row1 = mysqli_fetch_array($result1)) {

                                    echo "<option value='$row1[nama]'>$row1[nama]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nrp">NRP Mahasiswa</label>
                            <select class="form-control" name="nrp">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "db_mvc");
                                $result2 = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nrp = nrp");
                                while ($row2 = mysqli_fetch_array($result2)) {

                                    echo "<option value=$row2[nrp]>$row2[nama] :$row2[nrp]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nm_matkul">Nama Mata Kuliah</label>
                            <select class="form-control" name="nm_matkul">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "db_mvc");
                                $result3 = mysqli_query($con, "SELECT * FROM matkul WHERE nm_matkul = nm_matkul");
                                while ($row3 = mysqli_fetch_array($result3)) {

                                    echo "<option value='$row3[nm_matkul]'>$row3[nm_matkul]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kd_matkul">Kode Mata Kuliah</label>
                            <select class="form-control" name="kd_matkul">
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "db_mvc");
                                $result4 = mysqli_query($con, "SELECT * FROM matkul WHERE kd_matkul = kd_matkul");
                                while ($row4 = mysqli_fetch_array($result4)) {

                                    echo "<option value=$row4[kd_matkul]>$row4[kd_matkul] : $row4[nm_matkul]</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <a href="<?= base_url(); ?>rekap" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>