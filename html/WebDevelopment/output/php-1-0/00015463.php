<?php\nrequire 'db_connect.php';\n$name=$_POST[\"name\"];\n$findRider=\"select * from UserLocation where name!='$name'\";\n$result=mysqli_query($connection,$findRider);\nif($$result) {\n\twhile ($row=mysqli_fetch_assoc($result)) {\n\t                 \t# code...\n\t\t$serverResponse[] = $row;\n\t                 }           \n\t    echo json_encode((array(\"users\"=>