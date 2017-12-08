<?php
	$db_servername='localhost';
	$db_user='root';
	$db_password='root';
	$db_databaseName='wp2';

	

	$connection=new mysqli($db_servername,$db_user,$db_password,$db_databaseName);

	// Check connection
/*if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo $t;
}
*/





?>