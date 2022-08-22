<?php
$conn = mysqli_connect("sql313.epizy.com", "epiz_32432462", "hlRR4QSMi07", "epiz_32432462_CollegePlacement");
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
$showAlert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $img = $_POST['img'];
    $job = $_POST['job'];
    $location = $_POST['location'];
    $vacancy = $_POST['vacancy'];
    $salary = $_POST['salary'];
    $skills = $_POST['skills'];
    $exp = $_POST['exp'];
    $website = $_POST['website'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['description'];



    $existSql = "SELECT * FROM `epiz_32432462_CollegePlacement` WHERE email = '$email' ";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        $showError = "Username Already Exists!";
    } else {

        $sql =  "INSERT INTO `epiz_32432462_CollegePlacement`(`name`, `img`, `job`, `location`, `vacancy`, `salary`, `skills`, `exp`, `website`, `date`, `email`, `description`) VALUES ('$name','$img','$job','$location','$vacancy','$salary','$skills','$exp','$website','$date','$email','$description',current_timestamp())";
        // $sql = "INSERT INTO `users`(`firstName`, `midName`, `lastName`, `gender`, `email`, `number`, `dt`) VALUES ('$firstName','$midName','$lastName','$gender','$email','$number',current_timestamp())";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $showAlert = "Successfuly Register!";
        } else {
            $showAlert = "error!";
        }
    }
}
