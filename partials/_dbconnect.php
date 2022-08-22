<?php
$server = "sql313.epizy.com";
$username = "epiz_32432462";
$password = "hlRR4QSMi07";
$image = "";
$database = "epiz_32432462_CollegePlacement";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Error" . mysqli_connect_error());
}
?>

