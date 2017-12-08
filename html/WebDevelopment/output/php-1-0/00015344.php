<?php
require 'databaseconnectivity117.php';
$flag=0;
	$username="";
	$email="";
	$password="";
	$unumber=0;

	// $fnameErr="";
	$lnameErr="";
	$emailErr="";
	$passErr="";

if(isset($_POST["submit"]))
{
	$upass=$_POST["u_pass"];
	$uname=$_POST["u_name"];
	$uemail=$_POST["u_email"];
	$unumber=$_POST["u_number"];
	
	

	if(strlen($uname)==0){
		$lnameErr="<br>