<?php
include 'koneksi.php';
$query = "SELECT * FROM biodata ORDER BY id DESC LIMIT 1";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
$tgl_lahir = $data['tgl_lahir']; 
$umur = (new DateTime($tgl_lahir))->diff(new DateTime())->y;
$skills = [];
if (!empty($data['skill'])) {
  $skill_raw = explode(',', $data['skill']);
  for ($i = 0; $i < count($skill_raw) - 1; $i += 2) {
    $label = trim($skill_raw[$i]);
    $value = (int) filter_var($skill_raw[$i + 1], FILTER_SANITIZE_NUMBER_INT);
    $skills[] = ['label' => $label, 'value' => $value];
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - Kelly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename"><?php echo isset($data['nama_depan']) ? htmlspecialchars($data['nama_depan']) : ''; ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="contak.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p><?php echo isset($data['tentang']) ? htmlspecialchars($data['tentang']) : ''; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php echo $data['url_foto']; ?>" class="img-fluid" alt="pfp" style="width: 100%; height: 100%; object-fit: cover; display: block;">

          </div>
          <div class="col-lg-8 content">
            <h2><?php echo isset($data['profesi']) ? htmlspecialchars($data['profesi']) : ''; ?></h2>
            <p class="fst-italic py-3">
              <?php echo isset($data['deskripsi_profesi']) ? htmlspecialchars($data['deskripsi_profesi']) : ''; ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo isset($data['tgl_lahir']) ? htmlspecialchars($data['tgl_lahir']) : ''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo isset($data['website']) ? htmlspecialchars($data['website']) : ''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo isset($data['hp']) ? htmlspecialchars($data['hp']) : ''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo isset($data['kota']) ? htmlspecialchars($data['kota']) : ''; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $umur; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo isset($data['gelar']) ? htmlspecialchars($data['gelar']) : ''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo isset($data['email']) ? htmlspecialchars($data['email']) : ''; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?php echo isset($data['freelance']) ? htmlspecialchars($data['freelance']) : ''; ?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              <?php echo isset($data['keterangan_about']) ? htmlspecialchars($data['keterangan_about']) : ''; ?>
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p><?php echo isset($data['keterangan_skill']) ? htmlspecialchars($data['keterangan_skill']) : ''; ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">
  <?php 
  $half = ceil(count($skills) / 2); 
  for ($col = 0; $col < 2; $col++): 
  ?>
    <div class="col-lg-6">
      <?php 
      for ($i = $col * $half; $i < min(($col + 1) * $half, count($skills)); $i++): 
        $skill = $skills[$i];
      ?>
        <div class="progress">
          <span class="skill"><span><?php echo htmlspecialchars($skill['label']); ?></span> <i class="val"><?php echo $skill['value']; ?>%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" style="width: <?php echo $skill['value']; ?>%;" aria-valuenow="<?php echo $skill['value']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  <?php endfor; ?>
</div>


        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Stats Section -->

    </section><!-- /Stats Section -->
  </section><!-- /Stats Section -->
  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelly</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>