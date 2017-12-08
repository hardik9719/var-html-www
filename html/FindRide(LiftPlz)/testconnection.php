<?php
require 'db_connect.php';
$id=$_POST["id"];
$pass=$_POST["pass"];

	


//$sql="select * from  Users where id like '$id' and password like '$password' "; 
/*$selectQuery="select * from Users";
$selectResult=mysqli_query ($connection ,$selectQuery);
$resArray=array();
if($selectResult) {
	while ($row=mysqli_fetch_assoc($selectResult)) {
	                 	# code...
		$serverResponse[] = $row;
	                 }           
	    echo json_encode((array("users"=>$serverResponse))); 
	   // echo json_encode($serverResponse);     

} */






$insertQuery=  "insert into Users(id,password) values($id,'$pass');";
$insertResult=mysqli_query($connection,$insertQuery);
if($insertResult)
 echo "added";
else
	echo "Cannot Register";









//$result=mysqli_query($connection,$sql);

// if(mysqli_num_rows($result)>0){
// 	echo "Login Success";
// }else{
// 	echo "Login not success";
// }

// $emparray = array();
//     while($row =mysqli_fetch_assoc($result))
//     {
//         $emparray[] = $row;
//     }
//      echo json_encode(array("users"=>$emparray));

    //close the db connection
    mysqli_close($connection);

// 	echo "Inserting";
//    $sql="insert into Users values($name,'$pass')";
//    if(mysqli_query($conn,$sql)){
//    	echo "Inserted";
//    }else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }






?>