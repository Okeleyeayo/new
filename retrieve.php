<?php session_start();
$matricNo = $_GET['userId'];
$pwd = $_GET['pwd'];

$con = mysqli_connect("localhost","root","","tutorial_db");
$query = mysqli_query($con, "SELECT * from tutorial_tb where id= '$matricNo' and pwd = '$pwd'");
$q = mysqli_fetch_array($query);

$_SESSION['matric'] = $q['id'];
$_SESSION['nam'] = $q['name'];

echo $_SESSION['matric']."".$_SESSION['nam'];

mysqli_close($con);
?>