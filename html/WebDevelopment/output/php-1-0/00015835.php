<?php\nrequire 'db_connect.php';\n\n$email=$_POST[\"email\"];\n$startAdd=$_POST[\"startAdd\"];\t\n$endAdd=$_POST[\"endAdd\"];\n$rideType=$_POST[\"rideType\"];\n\n\n/*$insertQuery= \" INSERT INTO Rides (Email_fk, startAddress, endAddress, RideType) VALUES ('$email','$startAdd', '$endAdd', '$rideType');\";*/\n$select=\"select * from Rides where Email_fk!=$e\"\n$insertResult=mysqli_query($connection,$insertQuery);\nif($insertResult)\n echo \"entry added\";\nelse\n\techo \"Cannot Add\";\n   mysqli_close($connection);\n?>