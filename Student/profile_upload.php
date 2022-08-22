<?php

$msg = "";
$css_class = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $con = mysqli_connect("sql313.epizy.com", "epiz_32432462", "hlRR4QSMi07", "epiz_32432462_CollegePlacement");

    if (isset($_POST['epiz_32432462_CollegePlacement'])) {

        $filename = $_FILES['image']['name'];
        $file = $_FILES['image']['name'];

        $folder = 'images/' . $filename;

        
        // $query = "INSERT INTO `users` ('image') VALUES ('$file',current_timestamp())";
        if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) {
            $query = "INSERT INTO `epiz_32432462_CollegePlacement`(`image`) VALUES ('$filename')";
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
