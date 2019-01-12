<?php
session_start();
include ('database/database.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico');
	</style>
</head>
<body style="">

	<header>
		<nav class="navbar navbar-light bg-light" style="padding: 15px; box-shadow:2px 2px 4px #ffffff;">
			<img src="https://getbootstrap.com/docs/4.1/assets/img/bootstrap-stack.png" width="70" height="45" class="d-inline-block align-top" alt="" style="padding-left: 15px;"><h4 style="margin-right:760px; color: white; text-shadow: 2px 2px 4px #000000;">Student Management System</h4>
		  <a class="navbar-brand btn btn-success" href="login.php" style="width: 122px; height: 30px; font-size: 13px; font-weight: bold; background: #ff0066; border: none; border-radius: 7px; font-family: 'Abel',sans-serif; cursor: pointer; color: white;">Admin Login</a>
		</nav>
	</header>
 
	<div style="margin: 0; padding: 0; background: linear-gradient(rgba(0, 0, 153, 0.5), rgba(255, 0, 102, 0.5)), url(img/paper.jpg); position: relative; background-position: center; height: 100vh; text-align: center; color: white;">
		<h3 style="font-family: 'Pacifico', cursive; font-size: 50px; padding-top: 250px;">Welcome to our</h3>
		<h1 style="font-family: 'Pacifico', cursive; font-size: 70px; color: #ffff99;">School Management System</h1>
	</div>
<br><br>
    
    <?php
	if (isset($_SESSION['error'])) {
	      echo $_SESSION['error'];
	      unset($_SESSION['error']);
	    }
	?>
	<div class="container" style="background: #fff2f8; padding: 20px; margin-top: 20px; width: 600px; border-radius: 50px;">
		<div class="row justify-content-center">
        	<div class="col-md-6 col-md-offset-3" align="center">
				<form class="form-signin" pb-autologin="true" autocomplete="off" method="post" action="stu-details.php">

			      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

			      <h1 class="h3 mb-3" style="font-family: 'Pacifico', cursive; color: #330014; font-size: 25px;">Please Check Your Details</h1>
			      
			      <input type="text" id="inputEmail" class="form-control" placeholder="Roll Number...." name="rollnum" style="margin-bottom: 5px; font-family: 'Pacifico', cursive;" required="">
			      
			      <select class="form-control" id="exampleFormControl" name="std" style="margin-bottom: 15px; font-family: 'Pacifico', cursive;">
				      <option value="1st">1</option>
				      <option value="2nd">2</option>
				      <option value="3rd">3</option>
				      <option value="4th">4</option>
				      <option value="5th">5</option>
				      <option value="6th">6</option>
				      <option value="7th">7</option>
				      <option value="8th">8</option>
				      <option value="9th">9</option>
				      <option value="10th">10</option>
    			  </select>
                  
			      <button class="btn btn-lg btn-primary btn-block" type="showinfo" name="submit" style="background: #ff0066; border: none; font-family: 'Pacifico', cursive; margin-bottom: 7px;">Show information</button>
		    	</form>
		</div>
</div>
</div>

<p class="mt-5 mb-3" style="text-align: center; color: #330014; font-weight: bold;">© 2017-2018</p>

</body>
</html>