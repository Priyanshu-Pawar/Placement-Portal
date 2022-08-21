<?php
$update = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
   
    $sql = "Select * from users where username= '$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {

        if (isset($_POST["submit"])) {
            $password = $_POST["password"]; //enter the password on given box
            $hash = password_hash($password, PASSWORD_DEFAULT);  // it create hash of that password when we enter the pass.
            $sql = " UPDATE `users` SET  `password`='$hash ' WHERE `username`='$_POST[username]'";  // it will update the pass.
            if (mysqli_query($conn, $sql)) {
                $update = true;
            }
        }
    
    } else {
        $showError = "Invalid Password!";
    }
}

//   }





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
    <title>Forgot Password</title>
</head>

<body>

    <?php

    if ($update) {

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your Password Updated Successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    if ($showError) {

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> Invalid Username!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <!-- ..... -->


    <!-- main container -->
    <div class="login-container d-flex align-items-center justify-content-center">

        <form action="/demo/forgot.php" method="POST" class="login-form">

            <h1 class="text-center mb-5 ">Forgot Password</h1>

            <div class="mb-3" class="form-group">
                <label for="username" class="form-label">Email Id</label>
                <input type="email" placeholder="email id" class="form-control rounded-pill form-control-lg" id="username" maxlength="255" required name="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3" class="form-group">
                <label for="password" class="form-label">New Password</label>
                <input type="password" placeholder="new password" class="form-control rounded-pill form-control-lg" name="password" maxlength="255" required id="password">
            </div>

            <div class="d-grid gap-2">
                <button id="btn1" class="btn btn-primary rounded-pill btn-lg" type="submit" name="submit">Update</button>
            </div>
            <!-- <button id="btn1" type="submit" class="btn btn-primary btn-lg btn-block" >Login</button> -->
            <p class="mt-3 font-weight-normal  mb-3">Login<a href="login.php"><strong> Login Here</strong></a></p>
            <p class="mt-3 font-weight-normal  mb-3">Don't have an account? <a href="signup.php"><strong> SignUp Now</strong></a></p>
        </form>
    </div>
    <!-- container end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>






</body>

</html>