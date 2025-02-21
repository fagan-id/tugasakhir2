<?php
session_start();
require_once 'connection.php'; // Assuming this file initializes $conn with PDO or mysqli

// Fetch all menu items
$sql = "SELECT * FROM MENU";
$all_menu = $conn->query($sql);

// Fetch all promo with user details
$sqli = "SELECT * FROM PROMO P JOIN MENU M ON P.MENU_ID = M.MENU_ID";
$all_promo = $conn->query($sqli);

// Fetch all reviews with user details
$sql1 = "SELECT * FROM REVIEW R JOIN USER U ON R.USER_ID = U.USER_ID";
$all_review = $conn->query($sql1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Backland Kedai Kopi</title>

  <!-- Favicons -->
  <link href="assets/img/design-logo-cafe.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <!-- <link href="https://fonts.googleapis.com" rel="preconnect"> -->
  <!-- <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin> -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <script>
    alert("Selamat Datang Di Backland Website !");
  </script>
</head>

<body class="index-page">

  <!-- Navbar Section -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="assets/img/design logo-cafe.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Menu</a></li>
          <li><a href="#testimonials">Review</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/backland/backland-g4.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>WELCOME TO BACKLAND</h2>
            <p>BEST PLACE TO COFFEE AND CHILL</p>
          </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-instagram"></i>
              <h3><a href="https://www.instagram.com/_backland/">Instagram</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-tiktok"></i>
              <h3><a href="https://www.tiktok.com/@backland_kedaikopi">Tiktok</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-facebook"></i>
              <h3><a href="https://facebook.com">Facebook</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/backland/backland-g2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <div class="container section-title title" data-aos="fade-up">
              <p>ABOUT US</p>
            </div>
            <p class="fst-italic">
            Sebuah kafe yang menghadirkan kenyamanan dan kedamaian alami di dekat sawah yang indah. Terinspirasi oleh keindahan alam pedesaan, BackLand menawarkan suasana yang menenangkan, jauh dari hiruk-pikuk kota.
            </p>
          </div>
        </div>

      </div><br>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-1">
            <img src="assets/img/backland/backland-g3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-2 content">
            <div class="container section-title title" data-aos="fade-up">
              <p>OUR STORY</p>
            </div>
            <p class="fst-italic">
            Anda dapat menikmati secangkir kopi segar atau hidangan lezat sambil merasakan angin sepoi-sepoi dan menyaksikan pemandangan sawah yang menyejukkan. BackLand bukan hanya sekadar tempat untuk bersantai, tetapi juga destinasi untuk merasakan harmoni antara alam dan kenikmatan kuliner.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
      <div class="container section-title title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>OUR HALL OF MEMORIES</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 1
                },
                "480": {
                  "slidesPerView": 2,
                  "spaceBetween": 1
                },
                "640": {
                  "slidesPerView": 2,
                  "spaceBetween": 1
                },
                "992": {
                  "slidesPerView": 3,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/img/backland/backland-g1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g13.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/backland/backland-g15.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /gallery Section -->

    <!-- Promo Section -->
    <section id="promo_section" class="promo-section">

      <img src="assets/img/backland/backland-g20.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Check Out Our Promo!</h3>
              <p>Bringing you Amazing Promo Every Time!</p>
              <button class="cta-btn" onclick="location.href='#events'">Check</button>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /input-review Section -->
    <!-- End Promo Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="container section-title title" data-aos="fade-up">
          <h2>PROMO</h2>
          <p>OUR PROMO</p>
        </div>

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <?php
            while($row = mysqli_fetch_assoc($all_promo)){
            ?>
            <div class="swiper-slide d-flex flex-column justify-content-end event-item"
              style="background-image: url('<?php echo $row["picture"];?>'">
              <h3>
                <?php echo $row["promo_name"]?>
              </h3>
              <div class="price align-self-start">Rp.
                <?php echo $row["price"]?>
              </div>
              <p class="description">
                <?php echo $row["description"]?>
              </p>
            </div><!-- End Event item -->
            <?php
            }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->


    <!-- Portfolio Section -->

    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title title" data-aos="fade-up">
        <h2>MENU</h2>
        <p>Check Out Our Offer</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter1">Makanan</li>
            <li data-filter=".filter2">Minuman</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <?php
            while($row = mysqli_fetch_assoc($all_menu)){
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter<?php echo $row["category_id"];?>">
              <img src="<?php echo $row["picture"];?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>
                  <?php echo $row["name"];?>
                </h4>
                <p>
                  <?php echo $row["description"];?>
                </p>
                <p>Rp.
                  <?php echo $row["price"];?>
                </p>
                <a href="<?php echo $row["picture"];?>" title="
                  <?php echo $row["name"];?>"
                  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i>
                </a>
              </div>
            </div><!-- End Portfolio Item -->
            <?php
            }
            ?>
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title title" data-aos="fade-up">
        <h2>REVIEW</h2>
        <p>REVIEW FROM OUR CUSTOMER</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <?php
          while($row = mysqli_fetch_assoc($all_review)){
            $rating = $row['RATING'];
            if($rating > 3){
          ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/gambar-review.jpeg" class="testimonial-img" alt="">
                <h3>
                  <?php echo $row["name"]?>
                </h3>
                <!-- <h4><?php echo $row["number"]?></h4>
                <h4><?php echo $row["email"]?></h4> -->

                <?php
                echo '<div class="stars">';
                for ($i = 0; $i < $rating; $i++) {
                    echo '<i class="bi bi-star-fill"></i>';
                }
                echo '</div>';
                ?>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>
                    <p>
                      <?php echo $row["REVIEW"]?>
                    </p>
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <?php
            }
          }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- input-review Section -->
    <section id="input-review" class="input-review section">

      <img src="assets/img/backland/backland-g2.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Wanna Leave Your Own Review?</h3>
              <p>Make Us Better With Your Review !</p>
              <form action="connection.php" method="POST">
                <button class="cta-btn" name="review-button">Review</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /input-review Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15889.126373429595!2d105.1063044!3d-5.3739614!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40d3998914d625%3A0x44e57d2981ae07f5!2sBackLand%20Kedai%20Kopi!5e0!3m2!1sid!2sid!4v1717755711756!5m2!1sid!2sid"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Jl. Bhayangkara, Dusun V, Bagelen, Kec. Gedong Tataan, Kabupaten Pesawaran, Lampung</p>
              </div>
            </div><!-- End Info Item -->
          </div>

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62817213204</p>
              </div>
            </div><!-- End Info Item -->
          </div>

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h3>Whatsapp</h3>
                <p>https://wa.me/message/O4OPTIIUYDJPP1</p>
              </div>
            </div><!-- End Info Item -->
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">GP</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Jl. Bhayangkara, Dusun V, Bagelen, </p>
              <p>Kec. Gedong Tataan, Kabupaten Pesawaran, Lampung</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+62817213204</span></p>
              <p><strong>Email:</strong> <span>backlandcafe@gmail.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="https://facebook.com"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/_backland/"><i class="bi bi-instagram"></i></a>
              <a href="https://www.tiktok.com/@backland_kedaikopi"><i class="bi bi-tiktok"></i></a>
            </div>
          </div>

          <div class="col-lg-2   col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Menu</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Review</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>