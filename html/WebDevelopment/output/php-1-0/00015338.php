<?php
require 'databaseconnectivity117.php';
	$selectquery="select * from userdetails";
	$result_arr=array();
	$selectresult=mysqli_query($connection,$selectquery);
	if($selectresult){
		 //  echo "<table>