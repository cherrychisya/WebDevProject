<!DOCTYPE html>
<html>

<head>
  <title>GoodBakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-primary">
  <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    include 'navbar.php';
  ?>
  <div id="navbarContainer"></div>
  <div>
    <div><img class="d-block img-fluid" src="img/home/hero.png" width="100%" style=""></div>
  </div>
  <div class="py-5">
    <div style="" class="container">
      <div class="row d-flex justify-content-center">
        <div class="d-flex flex-column align-items-start">
          <div class="frame-box">
            <img class="img-fluid d-block" src="img/home/food (1).png">
          </div>
          <div class="frame-box">
          <img class="img-fluid d-block" src="img/home/food (2).png">
          </div>
        </div>
        <div class="col-md-6 mx-auto d-flex align-items-center">
          <p class="text-light text-justify">Indulge your senses in a world of exquisite flavors and heavenly aromas with our bakery receipt website. Explore a treasure trove of artisanal recipes, from flaky pastries to decadent cakes, and embark on a culinary journey that will delight both your palate and imagination. Unleash your inner baker, as we guide you step-by-step through our carefully crafted instructions, ensuring your creations turn out perfect every time.<br><br>Whether you're a seasoned baking enthusiast or just starting your culinary adventure, our website is your ultimate companion, offering a wide range of tantalizing recipes, expert tips, and helpful resources to elevate your baking skills. Join our passionate community of baking enthusiasts, share your own creations, and let the aroma of freshly baked goods fill your home as you create unforgettable memories one recipe at a time.</p>
        </div>
        <div class="d-flex flex-column align-items-end">
          <div class="frame-box">
          <img class="img-fluid d-block" src="img/home/food (3).png">
          </div>
          <div class="frame-box">
            <img class="img-fluid d-block" src="img/home/food (4).png">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>