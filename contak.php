<?php 
include 'koneksi.php';

$queryKontak = "SELECT * FROM kontak ORDER BY id DESC LIMIT 1";  
$resultKontak = mysqli_query($koneksi, $queryKontak);
$kontak = mysqli_fetch_assoc($resultKontak);

$queryBiodata = "SELECT * FROM biodata ORDER BY id DESC LIMIT 1";
$resultBiodata = mysqli_query($koneksi, $queryBiodata);
$data = mysqli_fetch_assoc($resultBiodata);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - Kelly Bootstrap Template</title>

  <!-- Favicons -->
  <link href="assets/kelly/img/favicon.png" rel="icon">
  <link href="assets/kelly/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/kelly/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/kelly/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/kelly/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/kelly/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/kelly/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/kelly/css/main.css" rel="stylesheet">
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename"><?php echo htmlspecialchars($data['nama_depan'] ?? ''); ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contak.php" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><?php echo htmlspecialchars($kontak['deskripsi_kontak'] ?? ''); ?></p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          
          <!-- LEFT: Contact Info -->
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p><?php echo htmlspecialchars($kontak['alamat'] ?? ''); ?></p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p><?php echo htmlspecialchars($data['hp'] ?? ''); ?></p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><?php echo htmlspecialchars($data['email'] ?? ''); ?></p>
                </div>
              </div>

              <div class="map-wrapper mt-3">
                <div style="max-width: 100%; overflow: hidden; max-height: 300px;">
                  <?php echo $kontak['peta'] ?? ''; ?>
                </div>
              </div>
            </div>
          </div>

          <!-- RIGHT: Contact Form -->
          <div class="col-lg-7">
            <form action="pesan.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="nama_pengirim" class="pb-2">Your Name</label>
                  <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" required>
                </div>

                <div class="col-md-6">
                  <label for="email_pengirim" class="pb-2">Your Email</label>
                  <input type="email" name="email_pengirim" id="email_pengirim" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label for="judul_pesan" class="pb-2">Subject</label>
                  <input type="text" name="judul_pesan" id="judul_pesan" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label for="pesan" class="pb-2">Message</label>
                  <textarea name="pesan" id="pesan" rows="10" class="form-control" required></textarea>
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary w-100">Send</button>
                </div>

              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer light-background">
    <div class="container">
      <div class="copyright text-center">
        <p>© Copyright <strong class="px-1 sitename">Kelly</strong> All Rights Reserved</p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/kelly/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/kelly/vendor/aos/aos.js"></script>
  <script src="assets/kelly/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/kelly/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/kelly/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/kelly/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/kelly/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/kelly/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/kelly/js/main.js"></script>
</body>
</html>
