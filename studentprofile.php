<!DOCTYPE html>
<html>
<head>
	<title>Student Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico');
	</style>
</head>

	<?php

	    function showdetails($roll,$stndrd){

	    	include ('database/database.php');
	    	$query = "SELECT * FROM `student_info` WHERE `rollno`='$roll' AND `standerd`='$stndrd'";
	    	$result = mysqli_query($con, $query);
	    	$row = mysqli_num_rows($result);
			if ($row>0) {
			    	$data = mysqli_fetch_assoc($result);
			    	?>
<body style="background: #fff2f8;">

	<header>
		<nav class="navbar navbar-light bg-light" style="padding: 15px; box-shadow:2px 2px 4px #ffe6f2;">
			<img src="https://getbootstrap.com/docs/4.1/assets/img/bootstrap-stack.png" width="70" height="45" class="d-inline-block align-top" alt="" style="padding-left: 15px;"><h4 style="margin-right:920px; color: white; text-shadow: 2px 2px 4px #000000;">Student Management System</h4>
		</nav>
	</header>

		<div class="container" style="margin-top: 20px;">
			<div class="card" style="width: 45rem; padding: 20px; margin-left: 200px;  border-radius: 10px; margin-top: 15px; margin-bottom: 15px;">
			  <img class="card-img-top" src="dataimg/<?php echo $data['image'];?>" alt="Card image cap">
			  <div class="card-body">
			    <h1 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;"><?php echo $data['name'];?></h1>
			    <h5 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;">Rollnumber: <?php echo $data['rollno'];?></h5>
			    <h5 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;">Email: <?php echo $data['email'];?></h5>
			    <h5 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;">Location: <?php echo $data['city'];?></h5>
			    <h5 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;">Contact: <?php echo $data['parentscontact'];?></h5>
			    <h5 class="card-title" style="text-align: center; font-family: 'Pacifico', cursive;">Standerd: <?php echo $data['standerd'];?></h5>
			    <a href="index.php" class="btn btn-lg btn-primary btn-block" style="background: #ff0066; border: none; font-family: 'Pacifico', cursive; margin-bottom: 7px;">Back</a>
			  </div>
			</div>
		</div>
</body>
</html>
	
<?php }else{ echo "<script>alert('No data Found');window.open('index.php','_self');</script>";} }?>
		
