<?php
require 'databaseconnectivity117.php';
$value="";
session_start();
$username= $_SESSION["uname"];
if(isset($_POST["submit"])){

	$value=$_POST["email"];
	if(empty($value)){

		$value=$_POST["number"];
		$updatequery="update  userdetails SET Number = $value WHERE Username='$username';";
		$updateresult=mysqli_query($connection,$updatequery);
		
		if($updateresult){
			echo "number UPDATED";
		}else {
			# code...
			echo "not added";
		}
	}else{
		$updatequery="update  userdetails SET Email = '$value' WHERE Username='$username';";
		$updateresult=mysqli_query($connection,$updatequery);
		
		if($updateresult){
			echo "Email UPDATED";
		}else {
			# code...
			echo "not added";
		}
	}




}

?>