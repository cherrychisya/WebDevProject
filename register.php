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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>
  <script>
    function validateForm() {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirm-password").value;

      if (password != confirmPassword) {
        Swal.fire({
          title: 'Error!',
          text: 'Passwords does not match',
          icon: 'error',
        })
        return false;
      }
    }
  </script>
</head>

<body class="bg-primary">
  <div class="container">
    <div class="row mx-5 h-100">
      <div class="col-md-5 bg-dark d-flex flex-column justify-content-center px-3">
        <img class="img-fluid d-block" src="img/login/welcome.png">
        <h6 class="text-light text-center mt-3">Create an Account</h6>
        <form id="c_form-h" class="d-flex flex-column" name="login" method="POST" action="db-register.php?usertype=user" onsubmit="return validateForm()">
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
          </div>
          <div class="row">
            <div class="col-md-4 pb-2">
              <p class="text-light">Confirm Password</p>
            </div>
            <div class="col-md-8">
              <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm Password" required="required">
            </div>
          </div>
          <button class="btn navbar-btn btn-light" type="submit" name="submit">Create Account</button>
          <h6 class="text-light text-center mt-3">Already have an account? &nbsp;<a href="index.php" class="text-secondary">log in here</a></h6>
        </form>
      </div>
      <div class="col-md-7 d-flex align-items-center">
        <img class="img-fluid d-block ml-5" src="img/login/donut.png">
      </div>
    </div>
  </div>
</body>

</html>