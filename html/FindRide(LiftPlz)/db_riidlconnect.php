<?php

$host="ftp.riidl.org";
$port=3306;
$socket="";
$user="riidlorg_lift";
$password="zxfghjm90";
$dbname="riidlorg_liftplease";

$connection = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
		// Check connection
// if ($connection->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// else{
// 	echo "Successfull";
// }


   



?>






















