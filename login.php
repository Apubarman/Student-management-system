<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico');
	</style>
</head>
<body>

	<header>
		<nav class="navbar navbar-light bg-light" style="padding: 15px; box-shadow:2px 2px 4px #ffe6f2;">
			<img src="https://getbootstrap.com/docs/4.1/assets/img/bootstrap-stack.png" width="70" height="45" class="d-inline-block align-top" alt="" style="padding-left: 15px;"><h4 style="margin-right:780px; color: white; text-shadow: 2px 2px 4px #000000;">Student Management System</h4>
		  <a class="navbar-brand btn btn-success" href="index.php" style="width: 122px; height: 30px; font-size: 13px; font-weight: bold; background: #ff0066; border: none; border-radius: 7px; font-family: 'Abel',sans-serif; cursor: pointer; color: white;">Back</a>
		</nav>
	</header>

	<div class="container" style="background: #fff2f8; padding: 20px; width: 580px; border-radius: 50px; margin-top: 50px">
		<div class="row justify-content-center">
        	<div class="col-md-6 col-md-offset-3" align="center">
        		<img class="mb-4" src="https://image.flaticon.com/icons/png/512/945/945277.png" alt="" width="130" height="130">

        		<h1 class="h3 mb-3" style="font-family: 'Pacifico', cursive; color: #330014; font-size: 25px;">Please Login Your Account</h1>

        		<form class="form-signin" pb-autologin="true" autocomplete="off" method="post" action="insert-login.php">
			      
			      <input type="text" id="inputUsername" class="form-control" placeholder="Enter Your Username...." name="username" style="margin-bottom: 10px; font-family: 'Pacifico', cursive;" required="">
			      
			      <input type="password" id="inputPassword" class="form-control" placeholder="Enter Your Password..." name="password" style="margin-bottom: 25px; font-family: 'Pacifico', cursive;" required="">

			      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" style="background: #ff0066; border: none; font-family: 'Pacifico', cursive; margin-bottom: 25px;">Login</button>
		    	</form>

        	</div>
        </div>
    </div>    		

</body>
</html>