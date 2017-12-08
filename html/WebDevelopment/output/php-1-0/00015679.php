<?php
require 'db_connect.php';
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];

$insertquery="insert into userdetails (Username, Password, Email) VALUES ('$name', '$password', '$email');";
$insertresult=mysqli_query($connection,$insertquery);

if($insertresult){
	echo "Success";
}else {
	# code...
	echo "Failure";
}

?>