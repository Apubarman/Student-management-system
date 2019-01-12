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

	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$username  = $_POST['username'];
	$password  = md5($_POST['password']);
	$email     = $_POST['email'];
	$phonenum  = $_POST['phonenum'];
	$role      = $_POST['role'];

	$query = "INSERT INTO `admin_register`(`user_id`, `firstname`, `lastname`, `username`, `email`, `password`, `phonenumber`, `role`) VALUES ('','$firstname','$lastname','$username','$email','$password','$phonenum','$role')";
	$result = mysqli_query($con,$query);

	if ($result) {
		$_SESSION['success'] = "<div class='alert alert-success' role='alert'>
  					Data inserted successfully!!!
			</div>";
		header('location:add-admin.php');
	}else{
		$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
			  Data not inserted seccessfully!
			</div>";
		header('location:add-admin.php');
	}
}


?>