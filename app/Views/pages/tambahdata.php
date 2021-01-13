<?= $this->include('layout/header'); ?>


<?= $this->include('layout/navbar'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <div class="d-md-flex justify-content-md-center mb-5">
                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalInput">
                    Tambah Makanan
                </button>
            </div>

            <!-- Modal TAMBAH MAKANAN -->
            <div class="modal fade" id="exampleModalInput" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal-header-centered">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Makanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/pages/simpan" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Makanan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_makanan" placeholder="Gado-gado" autofocus>
                                    <?= $validation->getError('nama_makanan'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Harga</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput2" name="harga_makanan" placeholder="25.000">
                                    <?= $validation->getError('harga_makanan'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi_makanan" rows="6"></textarea>
                                    <?= $validation->getError('deskripsi_makanan'); ?>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Makanan</label>
                                    <input class="form-control" type="file" name="foto_makanan" id="formFile">
                                    <?= $validation->getError('foto_makanan'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- SEMUA DATA MAKANAN -->
            <div class="text-center mb-3">
                <h2>Semua Makanan</h2>
            </div>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <table class="table table-success table-striped align-middle">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Foto Makanan</th>
                                    <th scope="col">Nama Makanan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produk as $p) : ?>
                                    <tr class="text-center">
                                        <th class="float-left" scope="row">1</th>
                                        <td><img src="/img/<?= $p['foto_makanan']; ?>" class="makanan" alt=""></td>
                                        <td><?= $p['nama_makanan']; ?></td>
                                        <td><?= $p['harga_makanan']; ?></td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <div class="d-md-flex mb-3">
                                                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalDetail">
                                                    Detail
                                                </button>
                                            </div>

                                            <!-- Modal DETAIL MAKANAN -->
                                            <div class="modal fade" id="exampleModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header modal-header-centered">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="/tambahdata/detail" method="POST" enctype="multipart/form-data">
                                                            <?= csrf_field(); ?>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Nama Makanan</label>
                                                                    <input type="text" class="form-control <?= ($validation->hasError('nama_makanan')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput1" name="nama_makanan" placeholder="Gado-gado" value="<?= (old('nama_makanan')) ? old('nama_makanan') : $p['nama_makanan'] ?>" autofocus>
                                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                                        <?= $validation->getError('nama_makanan'); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput2" class="form-label">Harga</label>
                                                                    <input type="number" class="form-control <?= ($validation->hasError('harga_makanan')) ? 'is-invalid' : ''; ?>" id="exampleFormControlInput2" name="harga_makanan" placeholder="25.000" value="<?= (old('harga_makanan')) ? old('harga_makanan') : $p['harga_makanan'] ?>">
                                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                                        <?= $validation->getError('harga_makanan'); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                                                    <textarea class="form-control <?= ($validation->hasError('deskripsi_makanan')) ? 'is-invalid' : ''; ?>" id="exampleFormControlTextarea1" name="deskripsi_makanan" rows="6" value="<?= (old('deskripsi_makanan')) ? old('deskripsi_makanan') : $p['deskripsi_makanan'] ?>"></textarea>
                                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                                        <?= $validation->getError('deskripsi_makanan'); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="formFile" class="form-label">Foto Makanan</label>
                                                                    <input class="form-control <?= ($validation->hasError('foto_makanan')) ? 'is-invalid' : ''; ?>" type="file" name="foto_makanan" id="formFile" value="<?= (old('foto_makanan')) ? old('foto_makanan') : $p['foto_makanan'] ?>">
                                                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                                                        <?= $validation->getError('foto_makanan'); ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>