<?php
require 'db_connect.php';
$name=$_POST["name"];
$lat=$_POST["latitude"];
$lng=$_POST["longitude"];
$updateQuery= "update UserLocation set latitude='$lat', longitude='$lng' where name='$name' ";
$updateQuery=mysqli_query($connection,$updateQuery);
if($updateQuery)
 echo $name;
else
	echo "Cannot update";

?>