<?php 
echo "string";
session_start();
if(isset($_POST["logout"])){
	session_destroy();
		header("Location: WelcomePage.html",true,301);
}


 ?>