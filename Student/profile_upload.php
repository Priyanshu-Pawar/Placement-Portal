<?php

$msg = "";
$css_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $con = mysqli_connect("localhost", "root", "", "upload");

    if (isset($_POST['upload'])) {

        $filename = $_FILES['image']['name'];
        $file = $_FILES['image']['name'];

        $folder = 'images/' . $filename;

        
        // $query = "INSERT INTO `users` ('image') VALUES ('$file',current_timestamp())";
        if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) {
            $query = "INSERT INTO `upload`(`image`) VALUES ('$filename')";
            $res = mysqli_query($con, $query);
            if ($res) {
                $msg = "Image uploaded successfully!";
                $css_class = "alert-success";
            } else {
                $msg = "Failed to upload image!";
                $css_class = "alert-danger";
            }
        } else {
            $msg = "Failed to upload image!";
            $css_class = "alert-danger";
        }
    }
}
