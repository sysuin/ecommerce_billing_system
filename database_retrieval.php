<?php
include "..\phpfiles\database_connection.php";

$sql="SELECT * FROM `products`";
$result=mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {

 printf ($row['ID'],);
 printf ("&nbsp");
 printf ($row['NAME'],);
 printf ("&nbsp");
 printf ($row['PRICE']);
 printf ("&nbsp");
 printf ("<br>");

}

mysqli_close($con);
?>