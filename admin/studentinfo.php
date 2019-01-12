<?php
include "../database/database.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
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

	<div class="container" style="background: #fff2f8; margin-top: 20px; padding: 12px; border-radius: 20px;">
		<h3 style="text-align: left;">Student Information<a href="addstudent.php" class="badge badge-success" style="float:right;">Add Student Information</a></h3>
		<div class="row justify-content-center">
        	<div class="col-md-12 col-md-offset-3" align="center">
				<table class="table table-hover" style="">
				  <thead style="background: #ff0066; color: white; text-align: center;">
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Rollnumber</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">City</th>
				      <th scope="col">Parent Contact</th>
				      <th scope="col">Standerd</th>
				      <th scope="col">Image</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody style="text-align: center; font-size: 13px;">
				  	<?php
				  	$i=1;
				    $query ="SELECT * FROM `student_info`";
					$result=mysqli_query($con, $query);
					$count=mysqli_num_rows($result);
					if($count>0){
					while($row=mysqli_fetch_array($result))
					{
				  	?>
				  	
				    <tr>
				      <th scope="row" style="padding-top: 20px;"><?php echo $i;?></th>
				      <td style="padding-top: 20px;"><?php echo $row['rollno'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['name'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['email'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['city'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['parentscontact'];?></td>
				      <td style="padding-top: 20px;"><?php echo $row['standerd'];?></td>
				      <td style="float: center;"><img src="../dataimg/<?php echo $row['image'];?>" class="rounded float-left" alt="..." height="50" width="50"></td>
				      <td style="padding-top: 20px;">
				      	
				      	<a href="updatestudent.php?updatestu_id=<?php echo $row['stu_id'];?>" class="btn btn-success" style="font-size: 12px; height: 28px; width: 40px; padding: 4px;">Edit</a>

				      	<a href="deleteinfo.php?deletestu_id=<?php echo $row['stu_id'];?>" class="btn btn-danger" style="margin-left: 5px; font-size: 12px; height: 28px; width: 52px; padding: 4px;">Delete</a>
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