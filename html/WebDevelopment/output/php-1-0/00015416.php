<?php\n\n\trequire 'db_connect.php';\n\n\t$errmsg=\"\";\n\t$upass=\"\";\n\n\t\t$uname=\"\";\n\t\tif(isset($_POST[\"login\"])){\n\t\t\t\tif(empty($_POST[\"Username\"])||empty($_POST[\"Password\"])){\n\t\t\t\t\t$errmsg=\"Username or Password cannot be empty\";\n\t\t\t\techo $errmsg;\n\t\t\t\t\t\n\t\t\t\t}\n\t\t\t\t\n\t\t\telse{\n\t\t\t\t$uname=$_POST[\"Username\"];\n\t\t\t\t$upass=$_POST[\"Password\"];\n\t\t\t\t$checkquery=\"select Username,Password from userdetails where Password='$upass' AND Username='$uname'; \";\n\t\t\t$loginresult=mysqli_query($connection,$checkquery);\n\t\t\t$numrow=mysqli_num_rows($loginresult);\n\n\t\t\t\tif( $numrow==1){\n\t\t\t\t\tsession_start();\n\t\t\t\t\t$_SESSION[\"uname\"] =$uname;\n\t\t\t\t\t\t\t\t\theader(\"Location: 1.html\",true,301);\n\n\t\t\t\t}else{\n\t\t\t\t\techo \"Login Failed\";\n\t\t\t\t}\n\t\t\t}\t\t\n\t\t\t\n\n\t\t}\n\t\t\n\t?>