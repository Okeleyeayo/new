<?php
$un = $_GET['sn'];
$password = $_GET['pwd'];

$con = mysqli_connect("localhost","root","","tutorial_db");
$insert = mysqli_query($con, "INSERT into tutorial_tb (name, pwd) values('$un', '$password')");
?>