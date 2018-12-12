<?php
	$con = mysqli_connect("localhost","root","","trial_db");

	$port = mysqli_query($con, "SELECT passport from bea_tb");
	while ($c = mysqli_fetch_array($port)) {
		$upix = $c['passport'];
	};
	echo "<img width='250px' src='".$upix."'>";
	include 'upload.html';
?>