<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style-admin.css" rel="stylesheet">
</head>

<body>
  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include 'navbar-admin.php';
    include 'sidebar-admin.php';
  ?>
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12 mt-5">
            <h1 class="display-3 text-center">Our Team</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-3 d-flex align-items-center flex-column">
            <div class="frame-box">
              <img class="img-fluid d-block" src="img/about_us/Nur Alisya Nadira binti Mohd Sukeri.png" style="	height: 13rem;">
            </div>
            <h5 class="text-center">Nur Alisya Nadira binti Mohd Sukeri</h5>
            <h6 >DI210116</h6>
          </div>
          <div class="col-md-3 d-flex flex-column align-items-center">
            <div class="frame-box">
              <img class="img-fluid d-block" src="img/about_us/Nur Dini Qistina.png" style="	height: 13rem;">
            </div>
            <h5 class=" text-center">Nur Dini Qistina </h5>
            <h6 >AI210062</h6>
          </div>
          <div class="col-md-3 d-flex align-items-center flex-column">
            <div class="frame-box">
              <img class="img-fluid d-block" src="img/about_us/Nur Haziqah Binti Yahaya.png" style="	height: 13rem;">
            </div>
            <h5 class="text-center">Nur Haziqah Binti Yahaya</h5>
            <h6 >AI210292</h6>
          </div>
          <div class="col-md-3 d-flex flex-column align-items-center">
            <div class="frame-box">
              <img class="img-fluid d-block" src="img/about_us/Nur Izzah Insyirah binti Mohd Albe.png" style="	height: 13rem;">
            </div>
            <h5 class="text-center">Nur Izzah Insyirah binti Mohd Albe </h5>
            <h6 >AI210381</h6>
          </div>
        </div>
      </div>
      <div class="pb-5 mb-5">
        <div class="container mb-5">
          <div class="row justify-content-center">
            <div class="col-md-3 d-flex align-items-center flex-column">
              <div class="frame-box">
                <img class="img-fluid d-block" src="img/about_us/Nurul Najwa binti Mardiustari.png" style="	height: 13rem;">
              </div>
              <h5 class="text-center">Nurul Najwa binti Mardiustari </h5>
              <h6>AI210072</h6>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
              <div class="frame-box">
                <img class="img-fluid d-block" src="img/about_us/Siti Nur Nadzierla binti Mohammab Zalil.png" style="	height: 13rem;">
              </div>
              <h5 class="text-center">Siti Nur Nadzierla binti Mohammab Zalil </h5>
              <h6>AI210098</h6>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
              <div class="frame-box">
                <img class="img-fluid d-block" src="img/about_us/Yau Jia Yin.png" style="	height: 13rem;">
              </div>
              <h5 class="text-center">Yau Jia Yin </h5>
              <h6>AI210303</h6>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>

</html>