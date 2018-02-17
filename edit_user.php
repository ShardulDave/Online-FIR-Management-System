<?php 
session_start();
require_once ('connection.php');


$var_value = $_GET['id'];


$bResult = mysqli_query($con, "SELECT * FROM regist WHERE u_id='$var_value'");


while($rows = mysqli_fetch_array($bResult,MYSQL_ASSOC))
{ 
$u_id = $rows['u_id'];
$user_name = $rows['user_name'];
$address = $rows['address'];
$aadharno = $rows['aadharno'];
$incident_date = $rows['incident_date'];
$incident_summary = $rows['incident_summary'];
$incident_start_time = $rows['incident_start_time'];
$incident_end_time = $rows['incident_end_time'];
$suspectinfo = $rows['suspectinfo'];
$typeofcrime = $rows['typeofcrime'];
}
?>

<html>
<head>
<?php 
	require_once 'design.php';
?>
</head>
<body>
<?php 
	require_once ('header.php');
	?>

<form action="submit_user.php" method="post"  name="form1" enctype="multipart/form-data">

	 <section id="hero"  style="padding: 60px 72px; background: #fff; text-align: center;">
	 	<h1>Edit User Detail</h1>
	 	<div class="container">

 		<div class="jumbotron">
	
	     <input type="hidden" name="u_id" value="<?php echo $u_id; ?>" />
        
		 <div>
  			 <input id="user_name" type="text" name="user_name"  placeholder="User Name"
  			 value="<?php echo $user_name;?>"  required>  			 
		</div>
		
		<div>
			<input id="address" type="text" name="address" placeholder="Address" 
			 value="<?php echo $address;?>" required >
		</div>

		<div class="form-group">
  			 <input id="aadharno" type="number" name="aadharno" placeholder="Enter Aadhar Card Number"  maxlength="12" size="43" value="<?php echo $aadharno;?>" required>
		</div>
		
		 
		 <div class="form-group">
			<input type="date" name="incident_date" placeholder="Enter Incident Date" 
			value="<?php echo $incident_date;?>" required>			
		 </div>	
		 
		 <div class="form-group">
			<input type="text" name="incident_summary" placeholder="Enter Incident Summary" 
			value="<?php echo $incident_summary;?>" required>			
		 </div>	
		
		 
		<div class="form-group">
			<input type="time" name="incident_start_time" placeholder="Enter Incident Start Time"
			value="<?php echo $incident_start_time;?>"  required>
			<input type="time" name="incident_end_time" placeholder="Enter Incident End Time"  
			value="<?php echo $incident_end_time;?>" required>
		 </div>	
	
		 <div>
		 	<input type="text" name="suspectinfo" placeholder="Enter Information Regarding Suspect" value="<?php echo $suspectinfo;?>" required >
		 </div>
		 
		 <div>
		 	<input type="text" name="typeofcrime" placeholder="Enter Type of Crime"
		 	value="<?php echo $typeofcrime;?>" required >
		 </div>
	
		

		<div class="form-group" align="center">		
				<input id="submit" type="submit" name="aadhar" value="SUBMIT" class="btn btn-danger">
		</div>
		
		</div>
		</div>
		 </section>
	
				
         
			
		 <?php 
	require_once ('footer.php');
	?>

	</form>
  <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>    
   <script src="js/main.js"></script>
   
</body>
</html>



