<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align: center; font-size: 24px;">Peminjaman Barang</h4>
                                <p class="card-description">

                                </p>
                                <form class="forms-sample" action="" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputtanggal">Tanggal Peminjaman</label>
                                        <input type="date" class="form-control" id="exampleInputName1" name="tanggalp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputmerek">Merek</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Merek" name="merek">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputjumlah">Jumlah Barang</label>
                                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Jumlah" name="jumlah">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputtanggal">Tanggal Pengembalian</label>
                                        <input type="date" class="form-control" id="exampleInputName1" name="pengembalian">
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->endSection(); ?>