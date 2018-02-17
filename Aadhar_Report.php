<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fir";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection




$aResult = mysqli_query($conn, "SELECT * FROM aadhar");

$actualpath = "/uploads/";
 
?>
<html>
<head>

</head>
<body>
		<?php 
	require_once ('adminheader_aadharreport.php');
?>
<form name="frmForm" id="frmForm" >
<table border="1" width="100%" height="30%"> 
<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Aadhar No.</font></th>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Address</font></th>
<th><font color='Red'>City</font></th>
<th><font color='Red'>D.O.B</font></th>
<th><font color='Red'>Election Card No.</font></th>
<th><font color='Red'>Ration Card No.</font></th>
<th><font color='Red'>Address Proof</font></th>
<th><font color='Red'>Birth Certificate</font></th>
<th><font color='Red'>Election Card</font></th>
<th><font color='Red'>Ration Card</font></th>
</tr> 

<?php

while($rows = mysqli_fetch_array($aResult,MYSQL_ASSOC))
{ 
$id = $rows['id'];
$Aadhar_Id = $rows['Aadhar_Id'];
$Name = $rows['Name'];
$Address = $rows['Address'];
$City = $rows['City'];
$DOB = $rows['DOB'];
$Election_Number = $rows['Election_Number'];
$Ration_Number = $rows['Ration_Number'];
$Address_Proof = $rows['Address_Proof'];
$Birth_Certi = $rows['Birth_Certi'];
$Election_Docs = $rows['Election_Docs'];
$Ration_Docs = $rows['Ration_Docs'];


?>
<tr>
 
<td><b><font color='#663300'><?php echo $id;?></font></b></td>
<td><b><font color='#663300'><?php echo $Aadhar_Id;?></font></b></td>
<td><b><font color='#663300'><?php echo $Name;?></font></b></td>
<td><b><font color='#663300'><?php echo $Address;?></font></b></td>
<td><b><font color='#663300'><?php echo $City;?></font></b></td>
<td><b><font color='#663300'><?php echo $DOB;?></font></b></td>
<td><b><font color='#663300'><?php echo $Election_Number;?></font></b></td>
<td><b><font color='#663300'><?php echo $Ration_Number;?></font></b></td>


<td><b><font color='#663300'><img src="uploads/<?php echo $Address_Proof; ?>" alt="" width="50" height="50" ></font></b></td>

<td><b><font color='#663300'><img src="uploads/<?php echo $Birth_Certi; ?>" alt="" width="50" height="50" ></font></b></td>

<td><b><font color='#663300'><img src="uploads/<?php echo $Election_Docs; ?>" alt="" width="50" height="50" ></font></b></td>

<td><b><font color='#663300'><img src="uploads/<?php echo $Ration_Docs; ?>" alt="" width="50" height="50" ></font></b></td>


<?php echo '<td><a href="edit_aadhar.php?id='.$rows['id'].'"><span style="color:green;">Edit</span></a></td>';?>

<?php echo '<td><a href="delete_aadhar.php?id='.$rows['id'].'"><span style="color:red;">Delete</span></a></td>';?>


 
</td>
</tr>
 
<?php } ?>
</table>
</form>
</body>
</html>
