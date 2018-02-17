<?php
// configuration
include('connection.php');
 
// new data
    $id = $_GET['id'];
	
// query
$aResult = mysqli_query($con, "DELETE FROM regist WHERE u_id='$id'");
                
header("location: myresult.php");
 
?>