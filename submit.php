<?php
// configuration
include('connection.php');
 
// new data
    $id=$_POST['id']; 
    $aadhar_id=$_POST['aadhar_id'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$birth_date=$_POST['birth_date'];
	$election_card_no=$_POST['election_card_no'];
	$ration_card=$_POST['ration_card'];
	
// query
 $aResult = mysqli_query($con, "UPDATE aadhar SET Aadhar_Id='$aadhar_id', Name='$name', Address='$address', City='$city', DOB='$birth_date', Election_Number='$election_card_no',Ration_Number='$ration_card' WHERE id='$id'");
                
header("location: Aadhar_Report.php");
 
?>