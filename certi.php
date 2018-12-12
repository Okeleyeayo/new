<?php
	$con = mysqli_connect("localhost","root","","trial_db");
    
	$port = mysqli_query($con, "SELECT 'certificate' from bea_tb where name = '$sn'");
	while ($c = mysqli_fetch_array($port)) {
		$ubea = $c['passport'];
	};
	echo "<img width='250px' src='".$ubea."'>";
	include 'upload.html';
?>