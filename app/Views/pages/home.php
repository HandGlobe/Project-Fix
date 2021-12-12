<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-size: 24px; text-align: center;">Daftar Peminjaman Barang</h4>
                                    <p class="card-description">

                                    </p>
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

                                                <tr>
                                                    <td class="py-1"> </td>
                                                    <td class="py-1"> </td>
                                                    <td class="py-1"> </td>
                                                    <td class="py-1"> </td>
                                                    <td class="py-1"></td>
                                                    <td class="py-1"> </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->endSection(); ?>