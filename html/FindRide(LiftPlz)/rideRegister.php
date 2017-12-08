<?php
require 'db_connect.php';

$email=$_POST["email"];
$startAdd=$_POST["startAdd"];	
$endAdd=$_POST["endAdd"];
$rideType=$_POST["rideType"];


$insertQuery= " INSERT INTO Rides (Email_fk, startAddress, endAddress, RideType) VALUES ('$email','$startAdd', '$endAdd', '$rideType');";
$insertResult=mysqli_query($connection,$insertQuery);
if($insertResult)
 echo "entry added";
else
	echo "Cannot Add";
   mysqli_close($connection);
?>