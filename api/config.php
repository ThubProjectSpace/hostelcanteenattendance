<?php
	//error_reporting(0);
	$con = mysqli_connect("localhost","root","","canteen_attendance");

	if (!$con) {
		echo "Database Connected";
		exit();
	}
?>