<?php

	session_start();
	if(empty($_SESSION["uname"]))
			header("Location: WelcomePage.html",true,301);
		else{
				$user=$_SESSION["uname"];
 echo $user;}


 ?>