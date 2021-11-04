<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <col-md-6>
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Mitra
                    <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </col-md-6>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>mitra/tambah" class="btn btn-primary">Tambah Mitra</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mitra</h3>
            <ul class="list-group">
                <?php foreach ($mitra as $mtr) : ?>
                    <li class="list-group-item">
                        <?= $mtr['nama']; ?>
                        <a href="<?= base_url(); ?>mitra/hapus/<?= $mtr['idmitra']; ?>" class="badge badge-danger float-right" onclick="return  confirm('yakin?');">hapus</a>
                        <a href="<?= base_url(); ?>mitra/detail/<?= $mtr['idmitra']; ?>" class="badge badge-primary float-right">detail</a>
                        <a href="<?= base_url(); ?>mitra/ubah/<?= $mtr['idmitra']; ?>" class="badge badge-success float-right">ubah</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>