<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Username :<input type="text" name="u_name"><br><br>
   Password  :<input type="text" name="u_pass"><br><br>
Email   :<input type="text" name="u_email"><br><br>
Number     :<input type="text" name="u_number"><br><br>
  <input type="submit"  name="submit" value="Submit">
</form>


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
		$lnameErr="<br>Username cannot be empty<br>";
		echo $lnameErr;
		$flag=1;

		
	
	}
	else if (!preg_match("/^[a-zA-Z ]*$/",$u_name)) {
	 $nameErr = "Name should only contain Alphabets";		
	
		}
		if (!filter_var($uemail,FILTER_VALIDATE_EMAIL))
			{
				$emailErr= "Invalid email formatttt";	
				$flag=1;
			}
		if(empty($uemail)){
			echo "Emailllll cannot be empty<br>";
			$flag=1;

					
			}

		if(empty($upass)){
			$passErr= "Fill Password Feild<br>";
			echo $passErr;
			$flag=1;
		}
		else if (!preg_match("/^[a-zA-Z ]*$/",$u_pass)) {
	 $nameErr = "Name should only contain Alphabets";		
	
		}
		if(empty($unumber)){
			echo "Please enter number<br>";
			$flag=1;
		}
	
		if(	$flag==0){
			$insertquery="insert into userdetails (Username, Password, Email, Number) VALUES ('$uname', '$upass', '$uemail', $unumber);";
			$insertresult=mysqli_query($connection,$insertquery);
			
			if($insertresult){
				echo "Entry Added";
			}else {
				# code...
				echo "not added";
			}
		}

	


   // echo "The form was submitted - your name is: " . $_POST["firstname"];
}
?>

</body>
</html>