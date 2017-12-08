<?php

require 'db_connect.php';
$name=$_POST["name"];
$findRider="select * from Rides where Email_fk='$name'";

$result=mysqli_query($connection,$findRider);

if($result) {

	while ($row=mysqli_fetch_assoc($result)) {
	                 	# code...
		$serverResponse[] = $row;
	                 }           
	    echo json_encode(array("rides"=>$serverResponse)); 
	   // echo json_encode($serverResponse);     

}


?>