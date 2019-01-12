<?php
include "../database/database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Acess Info</title>
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

	<div class="container" style="background: #fff2f8; margin-top: 20px; padding: 20px; border-radius: 30px;">
		<h3 style="text-align: left;">Admin Access Information<a href="adminacess.php" class="badge badge-success" style="float:right;">Admin Access Registration</a></h3>
		<div class="row justify-content-center">
        	<div class="col-md-12 col-md-offset-3" align="center">
        		<table class="table table-hover" style="">
				  <thead style="background: #ff0066; color: white; text-align: center;">
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">User Name</th>
				      <th scope="col">Password</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  	<?php
				  	$i=1;
				    $query ="SELECT * FROM `admin_login`";
					$result=mysqli_query($con, $query);
					$count=mysqli_num_rows($result);
					if($count>0){
					while($row=mysqli_fetch_array($result))
					{
				  	?>
				  <tbody style="text-align: center;">
				  	<tr>
				      <th style="padding-top: 20px;"><?php echo $i; ?></th>
				      <td style="padding-top: 20px;"><?php echo $row['username'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['password'];?></td>
				      <td style="padding-top: 20px;">
				      	
				      	<a href="editadminaccess.php?id=<?php echo $row['id'];?>" class="btn btn-success" style="font-size: 12px; height: 28px; width: 40px; padding: 4px;">Edit
				      	</a>

				      	<a href="deleteaccessinfo.php?idd=<?php echo $row['id'];?>" class="btn btn-danger" style="margin-left: 5px; font-size: 12px; height: 28px; width: 52px; padding: 4px;">Delete
				      	</a>
				      </td>
				    </tr>

				    <?php $i++;}}else{
				    	echo "No Data Found!!!";
				    } ?>

				  </tbody>

				</table>
        	</div>
        </div>
    </div>


<?php include 'footer.php';?>
</body>
</html>