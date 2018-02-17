<?php 
session_start();
require_once ('connection.php');


$var_value = $_GET['id'];


$bResult = mysqli_query($con, "SELECT * FROM aadhar WHERE id='$var_value'");


while($rows = mysqli_fetch_array($bResult,MYSQL_ASSOC))
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

<form action="submit.php" method="post"  name="form1" enctype="multipart/form-data">

	 <section id="hero"  style="padding: 60px 72px; background: #fff; text-align: center;">
	 	<h1>Edit Aadhar Detail</h1>
	 	<div class="container">

 		<div class="jumbotron">
	
	     <input type="hidden" name="id" value="<?php echo $id; ?>" />
        
		 <div>
  			 <input id="aadhar_id" type="text" name="aadhar_id"  placeholder="AadharId"
  			 value="<?php echo  $Aadhar_Id;?>"  required>  			 
		</div>
		
		<div>
			<input id="name" type="text" name="name" placeholder="Name" 
			 value="<?php echo $Name;?>" required >
		</div>

		<div class="form-group">
  			 <input id="address" type="text" name="address" placeholder="Address"  maxlength="20" size="43" value="<?php echo $Address;?>" required>
		</div>

		<div class="form-group">
  			 <input id="city" type="text" name="city" placeholder="City"  maxlength="20" size="43" value="<?php echo $City;?>" required>
		</div>

	    <div class="form-group">
  			 <input id="birth_date" type="date" name="birth_date" placeholder="Date Of Birth"  maxlength="20" size="43" value="<?php echo $DOB;?>" required>
		</div>

		
		 <div class="form-group">
			<input id="election_card_no" type="number" name="election_card_no" placeholder="Enter Election Card Number" 
			value="<?php echo $Election_Number;?>" required>			
		 </div>	
		 
		 <div class="form-group">
			<input id="ration_card" type="number" name="ration_card" placeholder="Enter Ration Card Number" 
			value="<?php echo $Ration_Number;?>" required>			
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



