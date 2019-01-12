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

	if (isset($_POST['update'])) {

		$id         = $_POST['id'];
		$rollnum    = $_POST['rollnum'];
		$fullname   = $_POST['fullname'];
		$email      = $_POST['email'];
		$city       = $_POST['city'];
		$contactnum = $_POST['contactnum'];
		$standerd   = $_POST['std'];

		$image = $_FILES['upimg']['name'];

		$query = "UPDATE `student_info` SET `rollno`='$rollnum',`name`='$fullname',`email`='$email',`city`='$city',`parentscontact`='$contactnum',`standerd`='$standerd', `image`='$image' WHERE `stu_id`='$id'";

		$result = mysqli_query($con,$query);

		if ($result){
			
			move_uploaded_file($_FILES['upimg']['tmp_name'], "../dataimg/$image");
			$_SESSION['success'] = "<div class='alert alert-success' role='alert'>
  					Data Update Successfully!!!
			</div>";
			header('location:studentinfo.php');
		}else{
			$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
  					Data Not Update Successfully!!!
			</div>";
			header('location:updatestudent.php');
		}
	}

?>