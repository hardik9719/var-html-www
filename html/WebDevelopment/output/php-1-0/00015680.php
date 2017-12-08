<?php
session_start();
require 'db_connect.php';
$id=$_POST["id"];
$findquery="select * from Laptop where id=$id ";
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