<?php
require "mycon.php";
$id = _GET['id'];
$query = $mysqli_query($con,delete from customer_tb where $id='id');


?>