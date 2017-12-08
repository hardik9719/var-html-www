<?php
require 'db_riidlconnect.php';

$email=$_POST["email"];

$query = "select * from Rides where Email_fk not in('$email')";


$result=mysqli_query($connection,$query);

if($result) {

	while ($row=mysqli_fetch_assoc($result)) {
	                 	# code...
		$serverResponse[] = $row;
	                 }           
	    echo json_encode(array("rides"=>$serverResponse)); 
	   // echo json_encode($serverResponse);     

}
else
	echo "Cannot Add";
      mysqli_close($connection);
?>