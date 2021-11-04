<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Mitra
                </div>
                <div class="card-body">
                    <p> <?= $mitra['nama']; ?></p>
                    <p><?= $mitra['jenkel']; ?></p>
                    <p><?= $mitra['alamat']; ?></p>
                    <p><?= $mitra['nohp']; ?></p>
                    <a href="<?= base_url(); ?>mitra" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>