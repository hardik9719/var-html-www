
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body>
	<div class="container">
		<div class="row">
			
		</div>
	</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Username :<input type="text" name="u_name"><br><br>
Password  :<input type="password" name="u_pass"><br><br>
<?php
$flag=0;
if($flag==1)
echo $errmsg;
?>

<input type =submit value="Submit" name="login">
<br>


</form>
<?php
error_reporting(E_ALL); ini_set('display_errors', 'On'); 
require 'db_connect.php';
$errmsg="";
$upass="";

	$uname="";
	if(isset($_POST["login"])){
			if(empty($_POST["u_name"])||empty($_POST["u_pass"])){
				$errmsg="Username or Password cannot be empty";
		
				$flag=1;
			}
			
		else{
			$checkquery="select Username,Password from userdetails where  Username='$uname' AND Password='$upass';";
		$loginresult=mysqli_query($connection,$checkquery);
		$numrow=mysqli_num_rows($loginresult);

		if( $numrow==1){
			session_start();
			$_SESSION["uname"] =$uname;
			echo "SUCCESS";

		}else{
			echo "Login Failed";
		}
		}		
		

	}
	
?>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>