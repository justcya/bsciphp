<?= $this->include('layout/header'); ?>


<?= $this->include('layout/navbar'); ?>


<div class="container pb-5">


  <div class="row">
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide pb-5" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
          <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/css/img/bg.jpg" class="rounded caroimg" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/css/img/lumpia.jpg" class="rounded caroimg" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/assets/css/img/pecel.jpg" class="rounded caroimg" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
  </div>
  <hr class="featurette-divider mt-5">
</div>


<section class="bg-sec" id="services">
  <div class="container pb-5">
    <div class="text-center">
      <h2 class="section-heading">Makanan Kamu</h2>
      <h5 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h5>
    </div>
    <div class="slider center">
      <?php foreach ($produk as $p) : ?>
        <a>
          <div class="card">
            <img src="/img/<?= $p['foto_makanan']; ?>" class="card-img-top" alt="Selengkapnya">
            <div class="card-body">
              <h5><?= $p['nama_makanan']; ?>
                <b class="float-end"><?= $p['harga_makanan']; ?></b>
              </h5>
              <p class="card-text"><?= $p['deskripsi_makanan']; ?></p>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="text-center m-0 p-0">
      <a href="/katering" class="lead">
        Selengkapnya
      </a>
    </div>
  </div>
</section>

<div class="text-center mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="/assets/css/img/food.png" class="img-foot" alt="">
        <p class="lead">Pilih Makanan Untuk<br>
          Berbagai Acara</p>
      </div>
      <div class="col-lg-6">
        <img src="/assets/css/img/gift.png" class="img-foot" alt="">
        <p class="lead">Kirim Kapanpun<br>
          Kamu Mau</p>
      </div>
    </div>
  </div>
</div>


<?= $this->include('layout/footer'); ?>