<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>
<body>

	<h1>Welcome <?php

	session_start();
	if(empty($_SESSION["uname"]))
			header("Location: WelcomePage.html",true,301);
		else{
				$user=$_SESSION["uname"];
 echo $user;}


 ?>
 	
 </h1>


	<a href="UpdateInformation.php">Click to Update Info</a>
<form action="Logout.php" method="POST">
	<input type="submit" name="logout" value="Logout" >

</form>
		

</body>
</html>