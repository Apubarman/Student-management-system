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

	if (isset($_POST['register'])) {

		$rollnum    = $_POST['rollnum'];
		$fullname   = $_POST['fullname'];
		$email      = $_POST['email'];
		$city       = $_POST['city'];
		$contactnum = $_POST['contactnum'];
		$standerd   = $_POST['std'];

		$image = $_FILES['upimg']['name'];

		$query = "INSERT INTO `student_info`(`stu_id`, `rollno`, `name`, `email`, `city`, `parentscontact`, `standerd`, `image`) VALUES ('','$rollnum','$fullname','$email','$city','$contactnum','$standerd','$image')";

		$result = mysqli_query($con,$query);

		if ($result) {
			
			move_uploaded_file($_FILES['upimg']['tmp_name'], "../dataimg/$image");
			$_SESSION['success'] = "<div class='alert alert-success' role='alert'>
  					Data inserted successfully!!!
			</div>";
			header('location:studentinfo.php');
		}else{
			$_SESSION['error'] = "<div class='alert alert-danger' role='alert'>
  					Data insert error!!!
			</div>";
			header('location:addstudent.php');
		}

	}

?>