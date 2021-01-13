<?= $this->include('layout/header'); ?>


<?= $this->include('layout/navbar'); ?>
<section class="page-section bg-sec mt-5">
    <div class="container pb-5">
        <div class="text-center">
            <h2 class="section-heading">Paket Kamu</h2>
            <h5 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h5>
        </div>
        <div class="container">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="/assets/css/img/bg.jpg" class="featurette-image img-fluid mx-auto" alt="">
                </div>

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="/assets/css/img/bg.jpg" class="featurette-image img-fluid mx-auto" alt="">
                    </div>
                </div>

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="/assets/css/img/bg.jpg" class="featurette-image img-fluid mx-auto" alt="">
                    </div>
                </div>

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="/assets/css/img/bg.jpg" class="featurette-image img-fluid mx-auto" alt="">
                    </div>
                </div>

            </div>
        </div>
</section>

<hr class="featurette-divider">


<div class="album py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-heading">Makanan Kamu</h2>
            <h5 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h5>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
            <?php foreach ($produk as $p) : ?>
                <div class="col-6">
                    <div class="card shadow-sm">
                        <img class="card-img-top" width="100%" height="225" src="/img/<?= $p['foto_makanan']; ?>"></img>
                        <div class="card-body">
                            <h5><?= $p['nama_makanan']; ?>
                                <b class="float-end"><?= $p['harga_makanan']; ?></b>
                            </h5>
                            <p class="card-text"><?= $p['deskripsi_makanan']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->include('layout/footer'); ?>