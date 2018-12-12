<?php
	$con = mysqli_connect("localhost","root","","trial_db");

	$port = mysqli_query($con, "SELECT 'signature' from bea_tb");
	while ($s = mysqli_fetch_array($port)) {
		$spix = $s['passport'];
	};
	echo "<img width='250px' src='".$upix."'>";
	include 'upload.html';
?>