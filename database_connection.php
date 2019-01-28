<?php 
//$host = '127.0.0.1:3306';
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ecommerce';

//$con = mysqli_connect("$host", "$user", "$pass");
//mysqli_select_db($con, $db) or die(mysqli_error($con));

$con=mysqli_connect("$host","$user","$pass","$db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//printf("Working")
?>