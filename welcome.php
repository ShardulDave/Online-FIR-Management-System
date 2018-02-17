<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fir";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection



$uname = $_SESSION['user_name'];



$aResult = mysqli_query($conn, "SELECT * FROM regist WHERE user_name='$uname'");

$actualpath = "/uploads/";
 
?>






<html>
<head>

</head>
<body>
		<?php 
	require_once ('clientheader.php');
?>
<br>
<form name="frmForm" id="frmForm">
<table border="1" width="100%" height="30%"> 
<tr>
<th><font color='Red'>Id</font></th>
<th><font color='Red'>Name</font></th>
<th><font color='Red'>Password</font></th>
<th><font color='Red'>Address</font></th>
<th><font color='Red'>Aadhar No.</font></th>
<th><font color='Red'>Incident Date</font></th>
<th><font color='Red'>Incident Start Time</font></th>
<th><font color='Red'>Incident End Time</font></th>
<th><font color='Red'>Incident Summary</font></th>
<th><font color='Red'>Document</font></th>
<th><font color='Red'>Suspect Info</font></th>
<th><font color='Red'>Type Of Crime</font></th>
</tr> 

<?php

while($rows = mysqli_fetch_array($aResult,MYSQL_ASSOC))
{ 
$id = $rows['u_id'];
$name = $rows['user_name'];
$password = $rows['pass'];
$address = $rows['address'];
$aadhar = $rows['aadharno'];
$incident_date = $rows['incident_date'];
$incident_strt_time = $rows['incident_start_time'];
$incident_end_time = $rows['incident_end_time'];
$summary = $rows['incident_summary'];
$doc = $rows['document'];
$susinfo = $rows['suspectinfo'];
$crime = $rows['typeofcrime'];

?>
<tr>
 
<td><b><font color='#663300'><?php echo $id;?></font></b></td>
<td><b><font color='#663300'><?php echo $name;?></font></b></td>
<td><b><font color='#663300'><?php echo $password;?></font></b></td>
<td><b><font color='#663300'><?php echo $address;?></font></b></td>
<td><b><font color='#663300'><?php echo $aadhar;?></font></b></td>
<td><b><font color='#663300'><?php echo $incident_date;?></font></b></td>
<td><b><font color='#663300'><?php echo $incident_strt_time;?></font></b></td>
<td><b><font color='#663300'><?php echo $incident_end_time;?></font></b></td>
<td><b><font color='#663300'><?php echo $summary;?></font></b></td>

<td><b><font color='#663300'><img src="uploads/<?php echo $doc; ?>" alt="" width="50" height="50" ></font></b></td>


<td><b><font color='#663300'><?php echo $susinfo;?></font></b></td>
<td><b><font color='#663300'><?php echo $crime;?></font></b></td>


 
</td>
</tr>
 
<?php } ?>
</table>
 <?php 
	require_once ('footer.php');
	?>
</form>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>    
   <script src="js/main.js"></script>
</body>
</html>
