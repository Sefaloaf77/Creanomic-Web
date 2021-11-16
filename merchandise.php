<?php
$merch = [
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
  [
    'img' => './assets/images/tote.png',
    'name' => 'Totebag',
    'price' => 'Rp. 10.000'
  ],
];
?>
<!DOCTYPE html>
<html>
  <?php include('./partials/head.php') ?>
  <link rel="stylesheet" href="./assets/css/merchandise.css">

<body onload="myFunction()">
  <?php include('./partials/navbar.php') ?>
  <main>
  <section class="merch text-center text-white">
    <div class="vh-100 w-100">
      <div class="d-flex align-items-center justify-content-center h-100 bg-dark">
        <!-- <video src=""></video> -->
        <p>video</p>
      </div>
    </div>
    <div class="container my-5">
      <h1 class="text-uppercase mt-5 pt-5">official<br>merchandise</h1>
      <h5 class="fw-bold pb-5">Creanomic 2021</h5>
      <div class="row mt-5">
        <?php foreach ($merch as $m){ ?>
        <div class="col-md-4 mb-4 d-flex flex-column">
          <div class="foto align-self-center">
            <img class="img-fluid" src="<?= $m['img'] ?>" alt="tote" />
          </div>
          <div class="h5 mb-0 mt-3"><?= $m['name'] ?></div>
          <p class="small"><?= $m['price'] ?></p>
        </div>
        <?php } ?>
      </div>
      <div class="h3 text-uppercase mt-5 mb-3 pt-5">What are you waiting for? Grab it fast!</div>
      <div class="row">
        <div class="col-md-6 mb-2">
          <a href="#" target="_blank" class="btn btn-dark-red shadow-none w-100">
            <i class="bi bi-whatsapp"></i>
            ORDER VIA WHATSHAPP
          </a>
        </div>
        <div class="col-md-6 mb-2">
          <a href="#" target="_blank" class="btn btn-dark-red shadow-none w-100">
            <i class="bi bi-line"></i>
            ORDER VIA LINE
          </a>
        </div>
      </div>
    </div>
  </section>
  </main>
  <?php include('./partials/footer.php') ?>
</body>
</html>