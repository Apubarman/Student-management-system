<?php

	if (isset($_POST['submit'])) {
		

		$roll   = $_POST['rollnum'];
		$stndrd = $_POST['std'];

		include ('database/database.php');
		include ('studentprofile.php');

		showdetails($roll,$stndrd);
	}

?>