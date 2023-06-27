<!DOCTYPE html>
<html>

<head>
  <title>GoodBakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: url('img/about_us/bg_top.png') top center no-repeat,
                  url('img/about_us/bg_bottom.png') bottom center no-repeat;
      background-size: 100%;
      background-position: center 70px, bottom center;
    }
  </style>
</head>

<body class="bg-primary">
  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include 'navbar.php';
  ?>
  <div class="pt-5 mt-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="display-3 text-light text-center">Our Team</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3 d-flex align-items-center flex-column">
        <div class="frame-box">
          <img class="img-fluid d-block" src="img/about_us/Nur Alisya Nadira binti Mohd Sukeri.png" style="	height: 13rem;">
        </div>
        <h5 class="text-light text-center">Nur Alisya Nadira binti Mohd Sukeri</h5>
        <h6 class="text-light">DI210116</h6>
      </div>
      <div class="col-md-3 d-flex flex-column align-items-center">
        <div class="frame-box">
          <img class="img-fluid d-block" src="img/about_us/Nur Dini Qistina.png" style="	height: 13rem;">
        </div>
        <h5 class="text-light text-center">Nur Dini Qistina </h5>
        <h6 class="text-light">AI210062</h6>
      </div>
      <div class="col-md-3 d-flex align-items-center flex-column">
        <div class="frame-box">
          <img class="img-fluid d-block" src="img/about_us/Nur Haziqah Binti Yahaya.png" style="	height: 13rem;">
        </div>
        <h5 class="text-light text-center">Nur Haziqah Binti Yahaya</h5>
        <h6 class="text-light">AI210292</h6>
      </div>
      <div class="col-md-3 d-flex flex-column align-items-center">
        <div class="frame-box">
          <img class="img-fluid d-block" src="img/about_us/Nur Izzah Insyirah binti Mohd Albe.png" style="	height: 13rem;">
        </div>
        <h5 class="text-light text-center">Nur Izzah Insyirah binti Mohd Albe </h5>
        <h6 class="text-light">AI210381</h6>
      </div>
    </div>
  </div>
  <div class="pb-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3 d-flex align-items-center flex-column">
          <div class="frame-box">
            <img class="img-fluid d-block" src="img/about_us/Nurul Najwa binti Mardiustari.png" style="	height: 13rem;">
          </div>
          <h5 class="text-light text-center">Nurul Najwa binti Mardiustari </h5>
          <h6 class="text-light">AI210072</h6>
        </div>
        <div class="col-md-3 d-flex flex-column align-items-center">
          <div class="frame-box">
            <img class="img-fluid d-block" src="img/about_us/Siti Nur Nadzierla binti Mohammab Zalil.png" style="	height: 13rem;">
          </div>
          <h5 class="text-light text-center">Siti Nur Nadzierla binti Mohammab Zalil </h5>
          <h6 class="text-light">AI210098</h6>
        </div>
        <div class="col-md-3 d-flex flex-column align-items-center">
          <div class="frame-box">
            <img class="img-fluid d-block" src="img/about_us/Yau Jia Yin.png" style="	height: 13rem;">
          </div>
          <h5 class="text-light text-center">Yau Jia Yin </h5>
          <h6 class="text-light">AI210303</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5 mb-5">
    <div class="card card-body rounded mb-5" style="flex-direction: row; align-items: center; margin-left: 300px; margin-right: 300px">
      <div class="col-md-6">
        <h4>Contact us for any enquiries! <i class="bi bi-emoji-smile"></i></h4>
      </div>
      <div class="col-md-6">
        <div class="frame-qr" style="height: 200px;">
          <img class="img-fluid d-block" src="img/about_us/whatsapp.jpeg">
        </div>
      </div>
    </div>
  </div>
</body>

</html>