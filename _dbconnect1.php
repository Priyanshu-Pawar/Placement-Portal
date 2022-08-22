<?php
$server = "sql313.epizy.com";
$username = "epiz_32432462";
$password = "hlRR4QSMi07";
$database = "epiz_32432462_CollegePlacement";

$conn1 = mysqli_connect($server, $username, $password, $database);

if (!$conn1) {
    die("Error". mysqli_connect_error());
}
?>

