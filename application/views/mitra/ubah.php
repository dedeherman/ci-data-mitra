<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Ubah Data Mitra
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <input type="hidden" name="idmitra" value="<?= $mitra['idmitra']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mitra['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jenkel" name="jenkel" value="<?= $mitra['jenkel']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mitra['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $mitra['nohp']; ?>">
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>