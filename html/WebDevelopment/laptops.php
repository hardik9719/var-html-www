<?php
require 'db_connect.php';

$findquery="select * from Laptop ";
$result=mysqli_query($connection,$findquery);
if($result){
		while ($row=mysqli_fetch_assoc($result)) {
		                 	# code...
			$serverResponse[] = $row;
		                 }           
		    echo json_encode(($serverResponse)); 
		   // echo json_encode($serverResponse);     

		}
else{
	echo("eror");
}

?>