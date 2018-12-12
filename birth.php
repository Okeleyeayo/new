<?php
	$con = mysqli_connect("localhost","root","","trial_db");

	$sn = $_POST['sname'];
	$port = mysqli_query($con, "SELECT upload from bea_tb where name = '$sn'");
	while ($c = mysqli_fetch_array($port)) {
		$upix = $c['passport'];
	};
	echo "<img width='250px' src='".$upix."'>";
	include 'upload.html';
?>