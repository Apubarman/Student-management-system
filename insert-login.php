<?php

session_start();

if (isset($_SESSION['uid'])) {
	header('location:admin/admin-dashboard.php');
}

include ('database/database.php');

if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM `admin_login` WHERE username='$username' AND password='$password'";
	$result = mysqli_query($con,$query);
	$row  = mysqli_num_rows($result);

	if ($row<1) {

		?>
		<script type="text/javascript">
			alert('Username or Password not match!!!');
			window.open('login.php','_self');
		</script>
		<?php
	 	
	 }else{
	 	$data = mysqli_fetch_assoc($result);

	 	$id=$data['id'];

	 	$_SESSION['uid']=$id;
	 	header('location:admin/admin-dashboard.php');
	 } 

}

?>