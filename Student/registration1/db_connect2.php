<?php
$server = "localhost";
$firstName = "root";
$lastName = "";
$database = "registration";

$conn = mysqli_connect($server, $firstName,$lastName, $database);

if (!$conn) {
    die("Error". mysqli_connect_error());
}
?>