
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
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
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Add Recipes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add new recipes</h5>
              
              <!-- General Form Elements -->
              <form method="post" action="db-insert.php" enctype="multipart/form-data">
              <input type="hidden" name="new" value="1" />

              <input name="recipes_id" type="hidden" class="form-control">

              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Food Name</label>
                <div class="col-sm-10">
                  <input name="name" type="text" id="name" class="form-control" >
                </div>
              </div>

              <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                  <input name="file" class="form-control" type="file" id="image">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Ingredients</label>
                <div class="col-sm-10">
                <textarea name="ingredient" id="ingredient"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label for="tutorial" class="col-sm-2 col-form-label">Instructions</label>
                <div class="col-sm-10">
                <textarea name="tutorial" id="tutorial"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label for="video" class="col-sm-2 col-form-label">Video</label>
                <div class="col-sm-10">
                  <input name="video" type="text" id="video" class="form-control" >
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button name="submit" type="submit" class="btn btn-primary">Add Recipe</button>
                </div>
              </div>
              </form><!-- End General Form Elements -->
              <p style="color:#FF0000;"></p>
            </div>
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