<!DOCTYPE html>
<html>

<head>
  <title>GoodBakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      margin: 0;
      background-image: url("img/login/bg.png") ;
      background-size: fill;
    }
    .container{
      height: 100vh;
    }
  </style>
</head>

<body class="bg-primary">
  <?php
  require('db.php');
  session_start();
  // If form submitted, insert values into the database.


  if (isset($_POST['email'])){
    // removes backslashes
    $email = stripslashes($_REQUEST['email']);
    //escapes special characters in a string
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE email='$email' and password='$password'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if($rows==1){
      $_SESSION['email'] = $email;
      if($row['type'] == "admin"){
        header("Location: admin-dashboard.php");
      // Redirect user to home.php
      }else{
        header("Location: home.php");
      }
    }else{
  ?>
  <div class="container">
    <div class="row mx-5 h-100">
      <div class="col-md-5 bg-dark d-flex flex-column justify-content-center px-3">
        <img class="img-fluid d-block" src="img/login/welcome.png">
        <h6 class="text-light text-center mt-3">Wrong credentials!</h6>
        <form id="c_form-h" class="d-flex flex-column" name="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
            <div class="col-md-4 mb-2">
              <p contenteditable="true" class="text-light">E-mail</p>
            </div>
            <div class="col-md-8">
              <input type="email" id="email" name="email" class="form-control" placeholder="mail@example.com" required="required">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pb-2">
              <p class="text-light">Password</p>
            </div>
            <div class="col-md-8">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
          </div><button class="btn navbar-btn btn-light" type="submit" name="submit">Log In</button>
          <h6 class="text-light text-center mt-3">To create an account&nbsp;<u class="text-secondary">click here</u></h6>
        </form>
      </div>
      <div class="col-md-7 d-flex align-items-center">
        <img class="img-fluid d-block ml-5" src="img/login/donut.png">
      </div>
    </div>
  </div>
  <?php
    }
  }else{
  ?>
  <div class="container">
    <div class="row mx-5 h-100">
      <div class="col-md-5 bg-dark d-flex flex-column justify-content-center px-3">
        <img class="img-fluid d-block" src="img/login/welcome.png">
        <h6 class="text-light text-center mt-3">Please log in to continue</h6>
        <form id="c_form-h" class="d-flex flex-column" name="login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="row">
            <div class="col-md-4 mb-2">
              <p contenteditable="true" class="text-light">E-mail</p>
            </div>
            <div class="col-md-8">
              <input type="email" id="email" name="email" class="form-control" placeholder="mail@example.com" required="required">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pb-2">
              <p class="text-light">Password</p>
            </div>
            <div class="col-md-8">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
          </div><button class="btn navbar-btn btn-light" type="submit" name="submit">Log In</button>
          <h6 class="text-light text-center mt-3">To create an account&nbsp;<a href="register.php" class="text-secondary">click here</a></h6>
        </form>
      </div>
      <div class="col-md-7 d-flex align-items-center">
        <img class="img-fluid d-block ml-5" src="img/login/donut.png">
      </div>
    </div>
  </div>
  <?php } ?>
</body>

</html>