<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$file = "uploads/".$_FILES['pix']['name'];
	$fileType = $_FILES['pix','signa','certi','resul','origi','birth']['type'];
	$fileSize = $_FILES['pix','signa','certi','resul','origi','birth']['size'];
	$temp = $_FILES['pix','signa','certi','resul','origi','birth']['tmp_name'];

    $un = $_POST['signa'];
    $ce = $_POST['certi'];
    $re = $_POST['resul'];
    $or = $_POST['origi'];
    $bi = $_POST['birth'];
     
	$con = mysqli_connect("localhost","root","","trial_db");

	if (move_uploaded_file($temp, $file)) 
	{
		$insert = mysqli_query($con, "INSERT into bea_tb(passport,signature,certificate,results,origin,birth) values('$un','$ce','$re','$or','$bi','$file')");

		echo "Insert was a success";
		include 'upload.html';
	}
}

?>