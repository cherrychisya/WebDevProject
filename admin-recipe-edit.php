
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
      <h1>Edit Recipe</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">Edit Recipe</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <?php
      include('db.php');

      if (isset($_POST['submit'])) {
        $id = $_POST['recipes_id'];
        $name = $_POST['name'];
        $ingredient = $_POST['ingredient'];
        $tutorial = $_POST['tutorial'];
        $video = $_POST['video'];

        // Check if a file is uploaded
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['image'];
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_size = $file['size'];
            $file_error = $file['error'];

            // Perform necessary checks and validations on the uploaded file
            // ...

            // Move the uploaded file to a desired location
            $destination = 'img/recipe/' . $file_name;
            if (move_uploaded_file($file_tmp, $destination)) {
                // Update the record in the database with the new image path
                $sql = "UPDATE recipes SET name='$name', ingredient='$ingredient', tutorial='$tutorial', image='$destination', video='$video' WHERE recipes_id='$id'";
                if (mysqli_query($con, $sql)) {
                    echo "Record updated successfully.";
                } else {
                    echo "Error updating record: " . mysqli_error($con);
                }
            } else {
                echo "Error uploading the file.";
            }
        } else {
            // Update the record in the database without changing the image
            $sql = "UPDATE recipes SET name='$name', ingredient='$ingredient', tutorial='$tutorial', video='$video' WHERE recipes_id='$id'";
            if (mysqli_query($con, $sql)) {
                echo "Record updated successfully.";
            } else {
                echo "Error updating record: " . mysqli_error($con);
            }
        }
      }

      // Check if 'recipes_id' parameter is present in the URL
      if (isset($_GET['recipes_id'])) {
        $id = $_GET['recipes_id'];

        // Retrieve the existing data from the database
        $sql = mysqli_query($con, "SELECT * FROM recipes WHERE recipes_id='$id'");
        $row = mysqli_fetch_assoc($sql);

        if ($row) {
      ?>
      <div class="card">
        <div class="card-body">
          <br>
          <!-- General Form Elements -->
          <form method="post" action="admin-recipe-edit.php" enctype="multipart/form-data">
          <input type="hidden" name="new" value="1" />

          <input name="recipes_id" type="hidden" class="form-control" value="<?php echo $row["recipes_id"]; ?>">

          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Food Name</label>
            <div class="col-sm-10">
              <input name="name" type="text" id="name" class="form-control" value="<?php echo $row["name"]; ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
              <input name="image" class="form-control" type="file" id="image">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Ingredients</label>
            <div class="col-sm-10">
            <textarea name="ingredient" id="ingredient"><?php echo $row['ingredient']; ?></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="tutorial" class="col-sm-2 col-form-label">Instructions</label>
            <div class="col-sm-10">
            <textarea name="tutorial" id="tutorial"><?php echo $row['tutorial']; ?></textarea>
            </div>
          </div>

          <div class="row mb-3">
            <label for="video" class="col-sm-2 col-form-label">Video</label>
            <div class="col-sm-10">
              <input name="video" type="text" id="video" class="form-control" value="<?php echo $row['video']; ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button name="submit" type="submit" class="btn btn-primary">Update Recipe</button>
            </div>
          </div>
          </form><!-- End General Form Elements -->
          <?php
            } else {
                echo "Recipe not found.";
            }
          } else {
            echo "No recipe ID provided.";
          }
          ?>
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