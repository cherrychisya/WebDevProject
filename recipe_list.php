<!DOCTYPE html>
<html>

<head>
  <title>GoodBakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .overlay-content {
      background-image: url('img/recipe_list/bg.png');
      background-size: cover;
      background-repeat: repeat;
      background-position: center;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body class="bg-primary">
  <div class="overlay-content">
    <?php
      $currentPage = basename($_SERVER['PHP_SELF']);
      include 'navbar.php';
    ?>
    <div class="pt-5">
      <h1 class="display-3 text-light text-center">Recipes</h1>
    </div>
    <div class="py-5">
      <div class="container">
        <?php
          include('db.php');
          $sql = "SELECT * FROM recipes";
          $all_product = $con->query($sql);
            
          while ($row = mysqli_fetch_assoc($all_product)){
            $id = $row['recipes_id'];
            $link = "recipe.php?recipes_id=".$id;
        ?>
        <div class="row d-flex mx-auto align-items-center justify-content-center py-2">
          <div class="frame d-flex flex-column align-items-start">
            <div class="frame-box">
              <img class="d-block img-fluid" src="<?php echo $row['image']; ?>">
            </div>
          </div>
          <div class="d-flex flex-column align-items-start col-md-5">
            <h3 class="text-light"><?php echo $row['name']; ?></h3>
            <a class="btn navbar-btn btn-light" href="<?php echo $link; ?>">Read Recipe</a>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
  </div>
</body>

</html>