<?php
include "../database/database.php";
?>
<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow:2px 2px 4px #ffe6f2;">
			<a class="navbar-brand" href="admin-dashboard.php">
	    		<img src="https://getbootstrap.com/docs/4.1/assets/img/bootstrap-stack.png" width="40" height="35" class="d-inline-block align-top" alt="">
	    		Admin Dashboard
  			</a>

  			<div class="collapse navbar-collapse">
  				<ul class="navbar-nav">
			        <li class="nav-item active">
			        	<a class="nav-link" href="admin-dashboard.php" style="margin-bottom: 2px; font-size: 11px; font-family: arial;">Dashboard</a>
			        </li>
			    </ul>
			    <ul class="navbar-nav" style="margin-bottom: 4px; margin-left: 2px; font-size: 11px; font-family: arial;">
			        <li class="nav-item">
			        	<a class="nav-link" href="adminaccessinfo.php">Access-info</a>
			        </li>
			    </ul>
			    <ul class="navbar-nav" style="margin-bottom: 4px; margin-left: 2px;font-size: 11px; font-family: arial;">
			        <li class="nav-item">
			        	<a class="nav-link" href="studentinfo.php">Student-Info</a>
			        </li>
			    </ul>

			    <a class="btn btn-primary" href="logout.php" style="background: #ff0066; border: none; font-family: 'Pacifico', cursive; margin-bottom: 4px; width: 100px; margin-left: 760px; padding: 5px;">Logout</a>
			</div>
		</nav>
	</header>
