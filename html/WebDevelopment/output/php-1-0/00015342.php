<?php
require 'databaseconnectivity117.php';
$errmsg="";
$upass="";

	$uname="";
	if(isset($_POST["login"])){
			if(empty($_POST["u_name"])||empty($_POST["u_pass"])){
				$errmsg="Username or Password cannot be empty";
		
				$flag=1;
			}
			
		else{
			$checkquery="select Username,Password from userdetails where Password='$upass' AND Username='$uname'; ";
		$loginresult=mysqli_query($connection,$checkquery);
		$numrow=mysqli_num_rows($loginresult);

		if( $numrow==1){
			session_start();
			$_SESSION["uname"] =$uname;
			header("Location: Homepage.php",true,301);

		}else{
			echo "Login Failed";
		}
		}		
		

	}
	
?>