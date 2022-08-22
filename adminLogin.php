<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include '_dbconnect1.php';

  $username = $_POST["username"];
  $password = $_POST["password"];


  // $sql = "Select * from users where username= '$username'AND password='$password'";
  $sql1 = "SELECT * FROM epiz_32432462_CollegePlacement WHERE username = '$username'";
  $result = mysqli_query($conn1, $sql1);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        session_start();
        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
      } else {
        $showError = "Invalid Password!";
      }
    }
  } else {
    $showError = "Invalid Username!";
  }
}
if (isset($_SESSION['loggedin'])) {
  header("location: Admin/admin_dashboard.php");
}

?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
  <title>Login</title>
</head>

<body>
  <?php //require 'partials/_nav.php' 
  ?>

  <!-- Alert message -->
  <?php

  if ($login) {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your are logged in.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  if ($showError) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> ' . $showError . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>
  <!-- ..... -->


  <!-- main container -->
  <div class="login-container d-flex align-items-center justify-content-center">

    <form action="/demo/adminLogin.php" method="POST" class="login-form">

      <h1 class="text-center mb-3 font-weight-light text-uppercase  ">Admin Login</h1>

      <div class="mb-3" class="form-group">
        <label for="username" class="form-label">Admin id</label>
        <input type="text" placeholder="Admin id" class="form-control rounded-pill form-control-lg" id="username" maxlength="20" required name="username" aria-describedby="emailHelp">

      </div>
      <div class="mb-3" class="form-group">
        <label for="password" class="form-label">Password</label>
        <input type="password" placeholder="Password" class="form-control rounded-pill form-control-lg" name="password" maxlength="30" required id="password">
      </div>
      <div class="forgot-link d-flex align-items-center justify-content-between">
        <!-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label for="remember">Remember Password</label>
        </div> -->
        <a href="#"> <strong>Forgot Password?</strong> </a>
      </div>

      <div class="d-grid gap-2">
        <button id="btn1" class="btn btn-primary rounded-pill btn-lg" type="submit">Login</button>
      </div>
      <!-- <button id="btn1" type="submit" class="btn btn-primary btn-lg btn-block" >Login</button> -->
      <!-- <p class="mt-3 font-weight-normal  mb-3">Don't have an account? <a href="signup.php"><strong> SignUp Now</strong></a></p> -->
    </form>
  </div>
  <!-- container end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>