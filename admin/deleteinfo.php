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

	$id = $_GET['deletestu_id'];

    $query = "DELETE FROM `student_info` WHERE `stu_id`='$id'";
    $result=mysqli_query($con, $query);
    if ($result) {
        $_SESSION['success'] = "<div class='alert alert-success' role='alert'>Data Deleted successfully!!!</div>";
        header('location:studentinfo.php');
    }else{
    	$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>Data Deleted successfully!!!</div>";
        header('location:studentinfo.php');
    }
?>