<?php
// configuration
include('connection.php');
 
// new data



    $u_id=$_POST['u_id']; 
    $user_name=$_POST['user_name'];
	$address=$_POST['address'];
	$aadharno=$_POST['aadharno'];
	$incident_date=$_POST['incident_date'];
	$incident_summary=$_POST['incident_summary'];
	$incident_start_time=$_POST['incident_start_time'];
	$incident_end_time=$_POST['incident_end_time'];
	$suspectinfo=$_POST['suspectinfo'];
	$typeofcrime=$_POST['typeofcrime'];
	
// query
 $aResult = mysqli_query($con, "UPDATE regist SET user_name='$user_name', address='$address', aadharno='$aadharno', incident_date='$incident_date', incident_summary='$incident_summary', incident_start_time='$incident_start_time',incident_end_time='$incident_end_time',suspectinfo='$suspectinfo',typeofcrime='$typeofcrime' WHERE u_id='$u_id'");
                
header("location: myresult.php");
 
?>