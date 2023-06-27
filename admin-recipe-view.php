<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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
      <h1>View Recipes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin-dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item">View Recipes</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Instructions</th>
                    <th scope="col">Video</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require('db.php');

                  function formatTutorial($tutorial) {
                      $steps = explode("\n", $tutorial);
                      $formattedTutorial = '<ol>';
                      foreach ($steps as $step) {
                          $formattedTutorial .= '<li>' . $step . '</li>';
                      }
                      $formattedTutorial .= '</ol>';
                      return $formattedTutorial;
                  }

                  $sql = "SELECT recipes_id, name, image, ingredient, tutorial, video FROM recipes";
                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          $id = $row['recipes_id'];
                          $link = "admin-recipe-edit.php?recipes_id=" . $id;

                          echo "<tr>";
                          echo "<td>" . $row["recipes_id"] . "</td>";
                          echo "<td>" . $row["name"] . "</td>";
                          echo "<td><img src='" . $row["image"] . "' style='width:100px;height:100px;'></td>";
                          echo "<td><ul>";        
                          $ingredients = explode("\n", $row["ingredient"]);
                          foreach ($ingredients as $ingredient) {
                              echo "<li>". $ingredient. "</li>";
                          }

                          echo "</ul></td>";
                          
                          $tutorial = $row["tutorial"];
                          $formattedTutorial = formatTutorial($tutorial);
                          echo "<td>" . $formattedTutorial . "</td>";
                          ?>
                          
                          <td><a <?php echo "href='".$row["video"]."'" ?> class="bi bi-play-btn"></a></td>
                          <td><a <?php echo "href='$link'" ?> class="bi bi-pencil-square"></a></td>
                          <td><a <?php echo "href='db-delete.php?recipes_id=".$row["recipes_id"]."'" ?>  class="bi bi-trash3"></a></td>

                          <?php
                          echo "</tr>";
                      }

                      echo "</table>";
                  } else {
                      echo "0 results";
                  }

                  $con->close();
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
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

</html>