<?php

include "../database/database.php";

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
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico');
	</style>
</head>
<body>

<?php include 'header.php';?>

	<div style="margin: 0; padding: 0; background: linear-gradient(rgba(0, 0, 153, 0.5), rgba(255, 0, 102, 0.5)), url(../img/crayons.jpg); position: relative; background-position: center; height: 80vh; text-align: center; color: white;">
		<h3 style="font-family: 'Pacifico', cursive; font-size: 50px; padding-top: 120px;">Welcome to our</h3>
		<h1 style="font-family: 'Pacifico', cursive; font-size: 70px; color: #ffff99;">School Management System</h1>
	</div>

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

	<div class="container" style="background: #fff2f8; padding: 30px; margin-top: 20px; width: 950em; border-radius: 20px;">
		<h3 style="text-align: left;">Admin Information<a href="add-admin.php" class="badge badge-success" style="float:right;">Admin Info Register</a></h3>
		<div class="row justify-content-center">
        	<div class="col-md-12 col-md-offset-3" align="center">
				<table class="table table-hover" style="margin-top: 10px;">
				  <thead style="background: #ff0066; color: white; text-align: center;">
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">firstname</th>
				      <th scope="col">Lastname</th>
				      <th scope="col">Username</th>
				      <th scope="col">Email</th>
				      <th scope="col">Phone Number</th>
				      <th scope="col">Role</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody style="text-align: center;">
				  	<?php
				  	$i=1;
				    $query ="SELECT * FROM `admin_register`";
					$result=mysqli_query($con, $query);
					$count=mysqli_num_rows($result);
					if($count>0){
					while($row=mysqli_fetch_array($result))
					{
				  	?>
				    <tr>
				      <th><?php echo $i;?></th>
				      <td><?php echo $row['firstname'];?></td>
				      <td><?php echo $row['lastname'];?></td>
				      <td><?php echo $row['username'];?></td>
				      <td><?php echo $row['email'];?></td>
				      <td><?php echo $row['phonenumber'];?></td>
				      <td><?php echo $row['role'];?></td>
				      <td>
				      	<a href="admindelete.php?idd=<?php echo $row['user_id'];?>" class="btn btn-danger" style="margin-left: 5px; font-size: 12px; height: 28px; width: 52px; padding: 4px;">Delete
				      	</a>
				      </td>
				    </tr>
				    <?php $i++;}}else{
				    	echo "No Data Found!!!";
				    } 
				    ?>
				  </tbody>
				</table>
			</div>
		</div>		
	</div>

<?php include 'footer.php';?>
</body>
</html>