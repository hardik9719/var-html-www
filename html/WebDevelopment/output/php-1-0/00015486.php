<?php\nrequire 'db_riidlconnect.php';\n\n$email=$_POST[\"email\"];\n\n$query = \"select * from Rides where \";\n\n\n$result=mysqli_query($connection,$query);\n\nif($result) {\n\n\twhile ($row=mysqli_fetch_assoc($result)) {\n\t                 \t# code...\n\t\t$serverResponse[] = $row;\n\t                 }           \n\t    echo json_encode(array(\"rides\"=>