<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    //  CHECK WHETHER THIS USERNAME EXISTS

    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "Username Already Exists!";
    } else {

        //    $exists = false;
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`, `username`, `password`, `dt`) VALUES (  '$name','$username', '$hash', current_timestamp())
      ";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Password do not match";
        }
    }
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
    <link rel="stylesheet" href="signup.css">
    <title>SignUp</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>

    <!-- Alert message -->
    <?php

    if ($showAlert) {

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Account is now created and you can login
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

        <form action="/demo/signup.php" method="POST" class="login-form">

            <h1 class="text-center mb-3 font-weight-light text-uppercase">SignUp</h1>


            <div class="mb-3" class="form-group">
                <label for="name" class="form-label">Enter Name</label>
                <input type="text" placeholder="Enter name" class="form-control rounded-pill form-control-lg" maxlength="255" required id="name" name="name" aria-describedby="emailHelp">

            </div>
            <div class="mb-3" class="form-group">
                <label for="username" class="form-label">Enter Email id</label>
                <input type="email" placeholder="example@gmail.com" class="form-control rounded-pill form-control-lg" maxlength="255" required id="email" name="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3" class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" placeholder="Password" class="form-control rounded-pill form-control-lg" maxlength="255" required name="password" id="password">
            </div>
            <div class="mb-3" class="form-group">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" class="form-control rounded-pill form-control-lg" maxlength="255" required name="cpassword" id="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>
            </div>
            <div class="d-grid gap-2">
                <button id="btn1" type="submit" class="btn btn-primary rounded-pill btn-lg">SignUp</button>
            </div>
            <p class="mt-3 font-weight-normal  mb-3">Already have an account? <a href="login.php"><strong> Login Here</strong></a></p>
        </form>
    </div>
    <!-- container end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>