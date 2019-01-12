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

		$id    = $_POST['id'];
	$username  = $_POST['username'];
	$password  = $_POST['password'];

	if ($_POST['password']== '') {
		$query = "UPDATE `admin_login` SET `username`='$username' WHERE `id`='$id'";
	}else{
		$query = "UPDATE `admin_login` SET `username`='$username', `password`='$password' WHERE `id`='$id'";
	}

	
	$result = mysqli_query($con,$query);

	if ($result) {
		$_SESSION['success'] = "<div class='alert alert-success' role='alert' style='width: 300px; margin-top: 20px; padding: 10px;'>
  					Data Update successfully!!!
			</div>";
		header('location:adminaccessinfo.php');
	}else{
		$_SESSION['error'] = "<div class='alert alert-danger' role='alert' style='width: 300px; margin-top: 20px; padding: 10px;'>
			  Data not update seccessfully!
			</div>";
		header('location:editadminaccess.php');
	}
}

?>