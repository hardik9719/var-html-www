<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname" >
  <br><br>
  Email:<br>
  <input type="text" name="email" >
  <br><br>
   Password:<br>
  <input type="text" name="password" >
  <br><br>
   Confirm Password:<br>
  <input type="text" name="cpassword" >
  <br><br>
  <input type="submit"  name="submit" value="Submit">
</form>


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
		$fnameErr= "firstname cannot be empty<br>";
		echo $fnameErr;
	}

	if(strlen($lname)==0){
		$lnameErr="lastName cannot be empty<br>";
		echo $lnameErr;
	}
	if (!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr= "Invalid email format";
			}
		if(empty($email)){
			echo "Email cannot be empty<br>";
		}
	if(empty($password)||empty($cpassword)){
		$passErr= "Fill Password Feilds";
		echo $passErr;
	}else{
		if($password!=$cpassword){
		echo "Both passwords do not match";
		}
	}


	


   // echo "The form was submitted - your name is: " . $_POST["firstname"];
}
?>

</body>
</html>