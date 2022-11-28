<?php 
session_start();
include('config.php');

	// initialize variables
	$name = "";
	$email = "";
	$phone = "";
	$date = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$date = $_POST['date'];
		

		mysqli_query($conn, "INSERT INTO info (name, email, phone, date) VALUES ('$name', '$email','$phone','$date')"); 
		$_SESSION['message'] = "Thank You for Choosing Us"; 
		header('location: Form.php');
	}
?>