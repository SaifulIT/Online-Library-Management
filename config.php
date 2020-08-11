<?php
$host="localhost";
$name="root";
$pass="";
$db="library";
$con=mysqli_connect($host,$name,$pass)or die('Database Error!');
mysqli_select_db($con,$db);
?>