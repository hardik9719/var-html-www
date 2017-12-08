<?php
		error_reporting(E_ALL); ini_set('display_errors', 'On'); 
		require 'db_connect.php';


		$errmsg="";
		$upass="";

		$uname="";
		if(isset($_POST["login"])){
				if(empty($_POST["Username"])||empty($_POST["Password"])){
					$errmsg="Username or Password cannot be empty";
				echo $errmsg;
					
				}
				
			else{
				$uname=$_POST["Username"];
				$upass=$_POST["Password"];
				$checkquery="select Username,Password from userdetails where  Username='$uname' AND Password='$upass';";
				$loginresult=mysqli_query($connection,$checkquery);
				$numrow=mysqli_num_rows($loginresult);
				
				if( $numrow==1){
					session_start();
					$_SESSION["userid"] =$uname;
					
					header("Location: 1.php");
						
				}else{
					echo "Login Failed";
				}
			}		
			

		}
		
		?>