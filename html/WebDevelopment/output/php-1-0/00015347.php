<?php
$fname="";
	$lname="";
	$email="";
	$password="";
	$cpassword="";
	// $fnameErr="";
	$lnameErr="";
	$emailErr="";
	$passErr="";

if(isset($_POST["submit"]))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];
	if(empty($fname)){
		$fnameErr= "firstname cannot be empty<br>