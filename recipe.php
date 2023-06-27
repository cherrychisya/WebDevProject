<!DOCTYPE html>
<html>

<head>
  <title>GoodBakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
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
  <?php
  include('db.php');

  function formatTutorial($tutorial) {
    $steps = explode("\n", $tutorial);
    $formattedTutorial = '<ol>';
    foreach ($steps as $step) {
        $formattedTutorial .= '<li>' . $step . '</li>';
    }
    $formattedTutorial .= '</ol>';
    return $formattedTutorial;
  }

  if (isset($_GET['recipes_id'])) {
    $id = $_GET['recipes_id'];
    $sql = mysqli_query($con, "SELECT * FROM recipes WHERE recipes_id='$id'");

    while ($row = mysqli_fetch_assoc($sql)) {
      $ingredients = explode("\n", $row["ingredient"]);
      $tutorial = $row["tutorial"];
      $formattedTutorial = formatTutorial($tutorial);
  ?>

  <div class="py-5 mt-5">
    <div class="col-md-12 d-flex flex-column align-items-center mt-5">
      <h1 class="display-3 text-light text-center pb-2 mt-5"><?php echo $row['name']; ?></h1>
      <div class="frame-rect">
        <img class="img-fluid d-block mx-auto" src="<?php echo $row['image']; ?>">
      </div>
    </div>
  </div>

  <div class="container mb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-body rounded">
          <h4>Ingredients</h4>
          <ul>
            <?php
              $ingredients = explode("\n", $row["ingredient"]);
              foreach ($ingredients as $ingredient) {
                  echo "<li>". $ingredient. "</li>";
              }
            ?>
          </ul>
        </div>
      </div>
      <div class="col-md-8">
        <h4 class="text-light ml-4">Instructions</h4>
        <ul class="text-light text-justify">
          <?php
              $tutorial = $row["tutorial"];
              $formattedTutorial = formatTutorial($tutorial);
              echo $formattedTutorial;
          ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="container pb-5 mb-5">
    <div class="row">
      <div class="col-md-10 d-flex flex-column align-items-center pb-5 mb-5">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo $row['video']; ?>" class="embed-responsive-item"></iframe>
        </div>
      </div>
      <div class="col-md-2 d-flex flex-column align-items-center pb-5 mb-5">
        <div class="card card-body rounded">
          <h4>Watch it on your mobile phone!</h4>
          <div class="frame-qr">
            <div id="qrcode"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      width: 200,
      height: 200,
    });

    // Generate QR code with the current URL
    var url = '<?php echo $row['video']; ?>';
    qrcode.makeCode(url);
  </script>
  <?php
    }
  } else {
      echo "No recipe ID provided.";
  }
  ?>
</body>

</html>