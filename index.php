<?php
$competitions = [
  [
    'title' => 'Business Plan',
    'img' => 'mascot_business_plan.png',
    'desc' => 'Develop a suitable business for Gen-Z by utilizing technological advances in the digital era.'
  ],
  [
    'title' => 'Essay Contest',
    'img' => 'mascot_essay.png',
    'desc' => 'Dampak era digital terhadap perkembangan bisnis.'
  ],
  [
    'title' => 'Design Poster',
    'img' => 'mascot-poster.png',
    'desc' => 'The impact of digital era suitable bussines in digital era.'
  ],
  [
    'title' => 'Photography',
    'img' => 'mascot_foto.png',
    'desc' => 'The challenge of facing epidemic era.'
  ],
  [
    'title' => 'Video Competition',
    'img' => 'mascot_video.png',
    'desc' => 'How to adjust to the new normal era.'
  ],
];
?>
<!DOCTYPE html>
<html>
<?php include('./partials/head.php') ?>
<link rel="stylesheet" href="./assets/css/home.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" />

<body onload="myFunction()">
  <?php include('./partials/navbar.php') ?>
  <main>
    <!-- jumbotron -->
    <div class="header text-center mx-auto">
      <div class="bg-gunung">
        <div class="info-title">
          <h1>Hi, Creator'Z</h1>
          <a href="competition.php" class="btn mt-4">Start Journey</a>
        </div>
      </div>
    </div>
    <!-- akhir jumbotron -->
    <div class="long-bg">
      <div class="container">
        <!-- About Crea -->
        <section class="about">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sm-11 col-11 dokum p-2 p-sm-3">
              <img src="./assets/images/teaser.png" class="img=fluid teaser" alt="teaser">
              <img src="./assets/images/play-button.png" class="play-button" onclick="playVideo('./assets/images/teaser.mp4')" alt="play button">
            </div>
            <div class="video-player" id="videoPlayer">
              <video width="100%" controls id="myVideo">
                <source src="./assets/images/teaser.mp4" type="video/mp4">
              </video>
              <img src="./assets/images/close-button.png" class="close-btn" onclick="stopVideo()" alt="close button">
            </div>
            <div class="col-lg-6 col-md-8 col-sm-11 col-11 mt-4 mt-lg-0 teks">
              <h2 class="fw-bold">CREANOMIC</h2>
              <p>
                Creative Economy and Innovation Centre, which well-known as Creanomic, is an annual event which holds by Vocational Education Program, Brawijaya University. The event itself brings up topic about creativity and innovation
                which maintains the standard economy. <br /><br />Due to corona virus pandemic, the event evolves to adapt the current situation along with bringing new concept this year. Creanomic also brings up new events: Virtual Art
                Exhibition, Virtual Concert, Webinar, and widen our competitions scope to International level.
              </p>
              <a href="./aboutus.php" class="btn">About Us</a>
            </div>
          </div>
        </section>
        
        <!-- Akhir About Crea -->

        <!-- tema -->
        <section class="tema" data-aos="fade-up">
          <div class="title">
            <h3 class="fw-bold mb-0">Theme of Event</h3>
          </div>
          <div class="content text-center">
            <h4>“Generation-Z and Entrepreneur Moving to Digital Era to Increase Your Business World”</h4>
          </div>
        </section>
        <!-- akhir tema -->

        <!-- the fest -->
        <section class="fest mb-5 mt-5">
          <div class="text-center mt-5">
            <h1 class="fw-bold text-light">Creanomic The Fest</h1>
            <div class="col-lg-7 gs mx-auto">
              <img src="./assets/images/gs-fest.png" style="width: 300px" class="img-fluid" alt="" />
              <div class="keterangan d-md-flex mt-md-4 mt-3 justify-content-center">
                <h4 data-aos="fade-left">XXX-SOON-XXX</h4>
                <h5 data-aos="fade-right">Date: XXXX-SOON-XXXX <br />Time: SO:ON <br />Place: XX-SOON-XX</h5>
              </div>
            </div>
          </div>
        </section>
        <!-- akhir the fest -->

        <section class="competitions my-5 py-5">
          <h1 class="text-center text-white fw-bold mt-5">Competition</h1>
          <div class="carousel-wrap my-5 py-5">
            <div class="owl-carousel owl-theme">
              <?php foreach ($competitions as $c) { ?>
                <div class="item">
                  <div class="glass">
                    <div class="row align-items-center card-img-top mx-0 image-class">
                        <img src="./assets/images/<?= $c['img'] ?>" class="img-fluid" alt="maskot" style="margin-top: -30px;">
                      </div>
                    <div class="text-start card-limiter p-3">
                      <div class="h3 text-white"><?= $c['title'] ?></div>
                      <p class="text-warning"><?= $c['desc'] ?></p>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </section>
      </div>
      <section class="webinar py-5">
        <div class="py-5 my-5">
          <div class="py-5 my-5 text-center">
            <div class="h1 fw-bold text-white">Talk Show</div>
            <div class="h4 text-black fw-light">“Strategies in Dealing with Business Challenges”</div>
            <div class="h4 text-black">14 November 2021</div>
            <div class="d-flex flex-wrap justify-content-center my-4">
              <img src="./assets/images/speaker1.png" style="width:200px;" class="img-fluid mt-3" alt="profile" data-aos="zoom-in-up">
              <img src="./assets/images/speaker2.png" style="width:200px;" class="img-fluid mt-3" alt="profile" data-aos="zoom-in-up">
              <img src="./assets/images/speaker3.png" style="width:200px;" class="img-fluid mt-3" alt="profile" data-aos="zoom-in-up">
            </div>
            <a href="https://bit.ly/RegistrasiTalkshowCreanomic2021" class="btn me-2">Join Now</a>
            <a href="webinar.php" class="btn0">More &rarr;</a>
          </div>
        </div>
      </section>
      <!-- filosofi -->
      <section class="filosofi">
        <div class="container">
          <h1 class="text-center text-white fw-bold mb-5">Logo Released</h1>
          <div class="row text-center align-content-center">
            <div class="col-md-2 tombol">
                <a onclick="ganti1()">
                  <button>
                    <img src="./assets/images/filosofi-1.svg" alt="" /></button
                ></a>
                <a onclick="ganti2()">
                  <button>
                    <img src="./assets/images/filosofi-2.svg" alt="" /></button
                ></a>
                <a onclick="ganti3()">
                  <button>
                    <img src="./assets/images/filosofi-3.svg" alt="" /></button
                ></a>
                <a onclick="ganti4()">
                  <button>
                    <img src="./assets/images/filosofi-4.svg" alt="" /></button
                ></a>
                <a onclick="ganti5()">
                  <button>
                    <img src="./assets/images/filosofi-5.svg" alt="" /></button
                ></a>
            </div>
            <div class="col-md-9 mt-3 view mt-sm-3 text-center" id="ganti-gambar" data-aos="fade-right">
                <img src="./assets/images/filosofi-0.png" class="img-fluid" alt="" />
                <div class="text my-auto text-start">
                  <h3 style="font-weight: bolder">Creanomic Logo Phylosophy</h3>
                  <p>New released</p>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir filosofi -->
      <?php include('./partials/footer.php') ?>
    </div>
    <!-- video play -->
    <script>
      var videoPlayer = document.getElementById("videoPlayer");
      var myVideo = document.getElementById("myVideo");

      function stopVideo() {
        videoPlayer.style.display = "none";
        videoPlayer = muted;
      }

      function playVideo(file) {
        myVideo.src = file;
        videoPlayer.style.display = "block";
      }
    </script>
      <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
      <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
      <script>
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 7,
          nav: true,
          dots: false,
          navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 3
            },
            1000: {
              items: 3
            }
          }
        })
      </script>
    
    <!-- filosofi js -->
    <script type="text/javascript">
      function ganti1() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src=assets/images/filosofi-1.svg class='img-fluid'>, <h3>The Text</h3>, <p class='my-auto'>The text inscribedd with Creanomic symbolizes creanomic event itself, an acronym from Creative Economy and  Inovation centre.</p>";
      }
      function ganti2() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src=assets/images/filosofi-2.svg class='img-fluid'>, <h3>The Rise</h3>, <p class='my-auto'>The rise of entrepreneurship skills Creanomic purpose, symbolized with an increased graph.</p>";
      }
      function ganti3() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src=assets/images/filosofi-3.svg class='img-fluid'>, <h3>The Fox</h3>, <p class='my-auto'>The Fox Animal Emblem (FOX) becomes a point the main of the Creanomic logo this time because of fox it’s a very smart animal among similar species, and able to adapt quickly, in accordance with the current generation who are able to adapt to the technology growing.</p>";
      }
      function ganti4() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src=assets/images/filosofi-4.svg class='img-fluid'>, <h3>4 Tails</h3>, <p class='my-auto'>The 4 tails  of the FOX is Creanomic event itself that focuses to the Creatifitas of Entrepreneurship and as a center for digital business innovation.</p>";
      }
      function ganti5() {
        document.getElementById("ganti-gambar").innerHTML =
          "<img src=assets/images/filosofi-5.svg class='img-fluid'>, <h3>Color Palettes</h3>, <p class='my-auto'>Monochrome blue and purple colors symbolize the future and fit this year’s Creanomic theme, and align with the Creanomic ideal of being ready in the future.</p>";
      }
    </script>
  </main>
</body>

</html>