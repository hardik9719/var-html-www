<?php
require 'databaseconnectivity117.php';
	$selectquery="select * from userdetails";
	$result_arr=array();
	$selectresult=mysqli_query($connection,$selectquery);
	if($selectresult){
		 //  echo "<table>";
		   while($row=mysqli_fetch_row($selectresult)){
		   	$result_arr[]=$row;
           /* echo "<tr>";
                echo "<td>" . $row['Userid'] . "</td>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Number'] . "</td>";
            echo "</tr>";*/
        }
      //   echo "</table>";
         echo json_encode(($result_arr));
	}else{
		echo "unable to connect to execute query";
	}





?>