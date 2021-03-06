<?php
session_start();

if (isset($_SESSION['uid'])) {
	echo "";
}else{
	header('location: ../login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Access Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico');
	</style>
</head>
<body>

	<?php include 'header.php';?>

	<?php
		if (isset($_SESSION['success'])) 
		{
	    	echo $_SESSION['success'];
	    	unset($_SESSION['success']);
	    }
	    if (isset($_SESSION['error'])) {
	      echo $_SESSION['error'];
	      unset($_SESSION['error']);
	    }
	?>

	<div class="container" style="background: #fff2f8; padding: 20px; width: 600px; border-radius: 50px; margin-top: 70px;">
		<div class="row justify-content-center">
        	<div class="col-md-6 col-md-offset-3" align="center">
        		<img class="mb-4" src="https://image.flaticon.com/icons/png/512/945/945277.png" alt="" width="130" height="130">

        		<h1 class="h3 mb-3" style="font-family: 'Pacifico', cursive; color: #330014; font-size: 25px;">Admin Registration<a href="adminaccessinfo.php" class="badge badge-success" style="padding: 5px; margin-left: 3px; font-weight: normal;">Back</a></h1>

        		<form method="post" action="insertadminaccess.php">

        		  <input type="text" id="inputUsername" class="form-control" placeholder="Enter Your Username...." name="username" style="margin-bottom: 10px; font-family: 'Pacifico', cursive;" required="">
			      
			      <input type="password" id="inputPassword" class="form-control" placeholder="Enter Your Password..." name="password" style="margin-bottom: 25px; font-family: 'Pacifico', cursive;" required="">
			      
			      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" style="background: #ff0066; border: none; font-family: 'Pacifico', cursive; margin-bottom: 25px;">Submit</button>
		    	</form>

        	</div>
        </div>
    </div>

	<?php include 'footer.php';?>

</body>
</html>