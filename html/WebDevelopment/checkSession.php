<?php 
	session_start();
	if(empty($_SESSSION["userid"])){
		echo "login";
	}else{
		echo "cart";
	}

 ?>