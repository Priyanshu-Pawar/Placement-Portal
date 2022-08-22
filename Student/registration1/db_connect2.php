<?php
$server = "sql313.epizy.com";
$firstName = "epiz_32432462";
$lastName = "hlRR4QSMi07";
$database = "epiz_32432462_CollegePlacement";

$conn = mysqli_connect($server, $firstName,$lastName, $database);

if (!$conn) {
    die("Error". mysqli_connect_error());
}
?>