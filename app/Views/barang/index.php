<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="/barang/create" class="btn btn-primary mb-3">Form Tambah Data</a>
                        <h4 class="card-title" style="font-size: 24px; text-align: center;">Daftar Peminjaman Barang</h4>
                        <?php if (session()->getFlashData('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashData('pesan'); ?>
                            </div>

                        <?php endif; ?>


                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Tanggal Peminjaman
                                        </th>
                                        <th>
                                            Nama Barang
                                        </th>
                                        <th>
                                            Merek
                                        </th>
                                        <th>
                                            Jumlah
                                        </th>
                                        <th>
                                            Tanggal Pengembalian
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php foreach ($barang as $row) : ?>




                                    <tr>
                                        <td class="py-1"><?= $row['NO']; ?> </td>
                                        <td class="py-1"> <?= $row['tanggalp']; ?> </td>
                                        <td class="py-1"> <?= $row['nama']; ?> </td>
                                        <td class="py-1"> <?= $row['merek']; ?> </td>
                                        <td class="py-1"> <?= $row['jumlah']; ?></td>
                                        <td class="py-1"> <?= $row['pengembalian']; ?></td>
                                    <?php endforeach; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->endSection(); ?>