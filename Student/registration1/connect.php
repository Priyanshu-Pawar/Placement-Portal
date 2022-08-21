<?php

include 'db_connect2.php';
$showAlert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$firstName = $_POST['firstName'];
	$midName = $_POST['midName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$img = $_FILES['img'];
	$pdf = $_FILES['pdf'];

	$filename1 = $_FILES['img']['name'];
	$filename2 = $_FILES['pdf']['name'];

	$fileext1 = explode('.', $filename1);
	$fileext2 = explode('.', $filename2);

	$fileCheck1 = strtolower(end($fileext1));
	$fileCheck2 = strtolower(end($fileext2));

	$fileExtStored = array('png', 'jpg', 'jpeg', 'pdf');

	if (in_array($fileCheck1, $fileExtStored) && in_array($fileCheck2, $fileExtStored)) {
		$folder1 = 'upload/' . $filename1;
		$folder2 = 'upload/' . $filename2;
		move_uploaded_file($_FILES['img']['tmp_name'], $folder1);
		move_uploaded_file($_FILES['pdf']['tmp_name'], $folder2);

		$existSql = "SELECT * FROM `registration` WHERE email = '$email'";
		$result = mysqli_query($conn, $existSql);
		$numExistRows = mysqli_num_rows($result);
		if ($numExistRows > 0) {
			$showError = "Username Already Exists!";
		} else {

			$sql = "INSERT INTO `registration`(`firstName`, `midName`, `lastName`, `gender`, `email`, `number`,`img`, `pdf`,`dt`) VALUES ('$firstName','$midName','$lastName','$gender','$email','$number','$filename1','$filename2',current_timestamp())";

			$result = mysqli_query($conn, $sql);
			if ($result) {
				$showAlert = "Successfuly Register!";
			} else {
				$showAlert = "error!";
			}
		}
	}
}
