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
		$_SESSION['message'] = "Client Information saved"; 
		header('location: index.php');
	}
?>

<?php
//update records
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];

	mysqli_query($conn, "UPDATE info SET name='$name', email='$email', phone='$phone', date='$date' WHERE id=$id");
	$_SESSION['message'] = "Client Information updated!"; 
	header('location: index.php');
}
?>
<?php

//deleting reords
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Client Record deleted!"; 
	header('location: index.php');
}
?>