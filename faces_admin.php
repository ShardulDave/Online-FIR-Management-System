<?php


session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fir";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection






$aResult = mysqli_query($conn, "SELECT * FROM faces");

$actualpath = "/uploads/";
 
?>






<html>
<head>

</head>
<body>
		<?php 
	require_once ('adminheader_faces.php');
?>
<br>
<form name="frmForm" id="frmForm">

<center><h2>All Faces Detail</h2></center>

<table border="1" width="100%" height="30%"> 
<tr>

<th><font color='Red'>Name</font></th>
<th><font color='Red'>Crime Time</font></th>
<th><font color='Red'>Place</font></th>
<th><font color='Red'>Crime Type</font></th>
<th><font color='Red'>Evidence 1</font></th>
<th><font color='Red'>Evidence 2</font></th>
<th><font color='Red'>Evidence 3</font></th>
<th><font color='Red'>Evidence 4</font></th>
<th><font color='Red'>Suspect 1</font></th>
<th><font color='Red'>Suspect 2</font></th>
<th><font color='Red'>Suspect 3</font></th>
<th><font color='Red'>Suspect 4</font></th>
<th><font color='Red'>Statement 1</font></th>
<th><font color='Red'>Statement 2</font></th>
<th><font color='Red'>Statement 3</font></th>
<th><font color='Red'>Statement 4</font></th>
</tr> 

<?php

while($rows = mysqli_fetch_array($aResult,MYSQL_ASSOC))
{ 
$id = $rows['id'];
$username = $rows['username'];
$crime_time = $rows['crime_time'];
$place = $rows['place'];
$crime_type = $rows['crime_type'];
$add1 = $rows['add1'];
$add2 = $rows['add2'];
$add3 = $rows['add3'];
$add4 = $rows['add4'];
$suspect1 = $rows['suspect1'];
$suspect2 = $rows['suspect2'];
$suspect3 = $rows['suspect3'];
$suspect4 = $rows['suspect4'];
$statment1 = $rows['statment1'];
$statment2 = $rows['statment2'];
$statment3 = $rows['statment3'];
$statment4 = $rows['statment4'];

?>
<tr>
 
<td><b><font color='#663300'><?php echo $username;?></font></b></td>
<td><b><font color='#663300'><?php echo $crime_time;?></font></b></td>
<td><b><font color='#663300'><?php echo $place;?></font></b></td>
<td><b><font color='#663300'><?php echo $crime_type;?></font></b></td>

<td><b><font color='#663300'><img src="uploads/<?php echo $add1; ?>" alt="" width="50" height="50" ></font></b></td>
<td><b><font color='#663300'><img src="uploads/<?php echo $add2; ?>" alt="" width="50" height="50" ></font></b></td>
<td><b><font color='#663300'><img src="uploads/<?php echo $add3; ?>" alt="" width="50" height="50" ></font></b></td>
<td><b><font color='#663300'><img src="uploads/<?php echo $add4; ?>" alt="" width="50" height="50" ></font></b></td>


<td><b><font color='#663300'><?php echo $suspect1;?></font></b></td>
<td><b><font color='#663300'><?php echo $suspect2;?></font></b></td>
<td><b><font color='#663300'><?php echo $suspect3;?></font></b></td>
<td><b><font color='#663300'><?php echo $suspect4;?></font></b></td>
<td><b><font color='#663300'><?php echo $statment1;?></font></b></td>
<td><b><font color='#663300'><?php echo $statment2;?></font></b></td>
<td><b><font color='#663300'><?php echo $statment3;?></font></b></td>
<td><b><font color='#663300'><?php echo $statment4;?></font></b></td>


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
