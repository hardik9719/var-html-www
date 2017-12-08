<?php
require 'databaseconnectivity117.php';
$upass=$_POST["u_pass"];
$uname=$_POST["u_name"];
$uemail=$_POST["u_email"];
$unumber=$_POST["u_number"];



$insertquery="insert into userdetails (Username, Password, Email, Number) VALUES ('$upass', '$uname', '$uemail', $unumber);";
$insertresult=mysqli_query($connection,$insertquery);
if($insertresult){
	echo "Entry Added";
}else {
	# code...
	echo "not added";
}


?>