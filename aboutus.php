<!DOCTYPE html>
<html>
    <?php include('./partials/head.php') ?>
    <link rel="stylesheet" href="./assets/css/aboutus.css">
<body onload="myFunction()">
  <?php include('./partials/navbar.php') ?>
  <main>
    <section class="about">
      <div class="container">
        <div class="col-md-12">
          <h1 class="text-center">About Us</h1>
        </div>
      </div>
    </section>

    <section class="creanomic">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-11 col-md-5 foto" data-aos="fade-right">
            <img class="img-fluid" src="./assets/images/about1.JPG" alt="creanomic" />
          </div>
          <div class="col-11 col-md-10 col-lg-6 keterangan">
            <h2>CREANOMIC</h2>
            <p>
              Creative Economy and Innovation Centre, which is well-known as Creanomic, is an annual event which holds by Vocational Education Program, Brawijaya University. The event itself brings up topics about creativity and innovation
              which maintains the standard economy.
              <br /><br />
              Due to coronavirus pandemic, the event evolves to adapt to the current situation along with bringing new concepts this year. Creanomic also brings up new events: Virtual Art Exhibition, Virtual Concert, Webinar, and widen the
              scope of our competition to International level.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="vision">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-11 col-md-10 col-lg-6 keterangan">
            <h2>VISION</h2>
            <p>
              Creanomic exists to provide innovation and collaborative creativity to Generation-Z in order to educate, develop potential, and motivate them to achieve their business and personal goals in the digital era. <br /><br />
              In Generation-Z, Creanomic becomes a medium to attract students' roles on how to become successful young entrepreneurs with innovation and creativity.
            </p>
          </div>
          <div class="col-11 col-md-5 foto" data-aos="fade-left">
            <img class="img-fluid" src="./assets/images/about2.JPG" alt="vision" />
          </div>
        </div>
      </div>
    </section>

    <section class="mission">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-11 col-md-5 foto" data-aos="fade-right">
            <img class="img-fluid" src="./assets/images/about3.JPG" alt="mission" />
          </div>
          <div class="col-11 col-md-10 col-lg-6 keterangan">
            <h2>MISSION</h2>
            <p>
              > Competence <br />
              Improve students' ability to do something adequately by developing their potential to support the value of self-quality.
            </p>
            <p>
              > Creative<br />
              Attracting the power of creativity by using the intelligence and imagination of students' thinking to contribute to creating events that inspire many people.
            </p>
            <p>
              > Innovative<br />
              Utilizing new thinking to create events that are fresh, prestigious, entertaining, and quality
            </p>
          </div>
        </div>
      </div>
    </section>
    </main>
  <?php include('./partials/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
        duration: 1000,
      });
    </script>
  </body>
</html>
