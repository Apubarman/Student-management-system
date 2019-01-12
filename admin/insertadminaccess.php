<?php

session_start();

	$localhost = "localhost";
	$username  = "root";
	$password  = "";
	$database  = "sms";

	$con = mysqli_connect($localhost,$username,$password,$database);

	if (!$con) {
		die('Database connection error!!!');
	}

if (isset($_POST['register'])){

	$username  = $_POST['username'];
	$password  = $_POST['password'];

	$query = "INSERT INTO `admin_login`(`id`, `username`, `password`) VALUES ('','$username','$password')";
	$result = mysqli_query($con,$query);

	if ($result) {
		$_SESSION['success'] = "<div class='alert alert-success' role='alert'>
  					Data inserted successfully!!!
			</div>";
		header('location:adminacess.php');
	}else{
		$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
			  Data not inserted seccessfully!
			</div>";
		header('location:adminacess.php');
	}
}


?>