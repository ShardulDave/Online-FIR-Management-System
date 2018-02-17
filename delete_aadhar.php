<?php
// configuration
include('connection.php');
 
// new data
    $id = $_GET['id'];
	
// query
$aResult = mysqli_query($con, "DELETE FROM aadhar WHERE id='$id'");
                
header("location: Aadhar_Report.php");
 
?>