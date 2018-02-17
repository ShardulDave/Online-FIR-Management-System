<?php 

require_once ('connection.php');
$user_name="";
$address="";
$aadharno="";
$incident_date="";
$file="";
$incident_summary="";
$incident_start_time="";
$incident_end_time="";
$suspectinfo="";
$typeofcrime="";

if(isset($_POST['sign_up']))
{
	
    

	$user_name=$_POST['user_name'];
	$address=$_POST['address'];
	$aadharno=$_POST['aadharno'];
	$pass=$_POST['pass'];
	$c_pass=$_POST['c_pass'];
	$incident_date=$_POST['incident_date'];
	$incident_summary=$_POST['incident_summary'];
	$incident_start_time=$_POST['incident_start_time'];
	$incident_end_time=$_POST['incident_end_time'];
	$suspectinfo=$_POST['suspectinfo'];
	$typeofcrime=$_POST['typeofcrime'];
	
	
		 $query = "SELECT * FROM aadhar WHERE Aadhar_Id='$aadharno'";
		 $result=mysqli_query($con, $query);
		 $row = mysqli_fetch_array($result);


			
			

			

		    if(strlen($user_name)<2 && strlen($user_name)>15)
			{
				echo "Enter Character between 3 To 15 .";
			}
			elseif (strlen($pass)<=6 && strlen($pass)>=20)
			{
				
			}
			elseif (strlen($pass)<=6 && strlen($pass)>=20)
			{
			
			}
			elseif ($pass != $c_pass)
			{
				echo "<script>alert('Password Does Not Same')</script>";
			}
			elseif(strlen($aadharno) != 12)
			{
				echo "<script>alert('Aadhar Number must be 12 digits')</script>";
				
			}

			
             elseif($row['Aadhar_Id']!=$aadharno)
			{
			echo "<script>alert('Your Aadhar Card Not Registered')</script>";
			}

			else 
			{

				 $path = "uploads/";
                 $filename=basename( $_FILES['file']['name']);
     
                 $path = $path . basename( $_FILES['file']['name']);
                
                 if(move_uploaded_file($_FILES['file']['tmp_name'], $path) ){
        
                      ?><script>alert('successfully register your crime detail!');</script><?php
                    

                      $aResult = mysqli_query($con, "INSERT INTO regist (user_name,address,aadharno,pass,incident_date,incident_summary,document,incident_start_time,incident_end_time,suspectinfo,typeofcrime) values ('$user_name','$address','$aadharno','$pass','$incident_date','$incident_summary','$filename','$incident_start_time','$incident_end_time','$suspectinfo','$typeofcrime')");

                        $user_name="";
						$address="";
						$aadharno="";
						$pass="";
						$c_pass="";
						$incident_date="";
						$incident_summary="";
						$incident_start_time="";
						$incident_end_time="";
						$suspectinfo="";
						$typeofcrime="";				


     }
     else
     {
        ?><script>alert('error while uploading file');</script><?php
     }
    }
				


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

<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post"  name="form1" enctype="multipart/form-data">

	 <section id="hero"  style="padding: 60px 72px; background: #fff; text-align: center;">
	 	<h1>SIGN UP</h1>
	 	<div class="container">
 		 <div class="jumbotron">
			
		
	
	
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
		 	<input id="pass" type="password" name="pass" placeholder="Enter Password" maxlength="16"
		 	 required>
			<input id="c_pass"type="password" name="c_pass" placeholder="Enter Conform Password" maxlength="16" required>
		</div>
		 
		 <!--<div class="form-group">
		 	<h4>
				<input type="radio" name="type" value="s" checked>Student
				
		
				<input type="radio" name="type" value="t">Teacher
				</h4>
		 </div>	-->
		 
		 <div class="form-group">
			<input type="date" name="incident_date" placeholder="Enter Incident Date" 
			value="<?php echo $incident_date;?>" required>			
		 </div>	
		 
		 <div class="form-group">
			<input type="text" name="incident_summary" placeholder="Enter Incident Summary" 
			value="<?php echo $incident_summary;?>" required>			
		 </div>	
		 <center> 
		 <div class="form-group">
			Upload Document<input type="file" name="file" 
			value="<?php echo $file;?>"/>			
		 </div>
		 </center>	
		 
		<div class="form-group">
			Start Time<input type="time" name="incident_start_time" placeholder="Enter Incident Start Time"
			value="<?php echo $incident_start_time;?>"  required>
			End Time<input type="time" name="incident_end_time" placeholder="Enter Incident End Time"  
			value="<?php echo $incident_end_time;?>" required>
		 </div>	
		<!--  <div class="form-group" >
				<select>
					<option>Security Question </option>
					<option>1) What is your Birth Day ?</option>
					<option>2) what is your Nick Name ?</option>
				</select>
		
				<input type="text" name="s_ans"  placeholder="Enter Ans" required>
		 </div>	-->
		 <div>
		 	<input type="text" name="suspectinfo" placeholder="Enter Information Regarding Suspect" value="<?php echo $suspectinfo;?>" required >
		 </div>
		 
		 <div>
		 	<input type="text" name="typeofcrime" placeholder="Enter Type of Crime"
		 	value="<?php echo $typeofcrime;?>" required >
		 </div>
		 
		 <div class="form-group" align="center">		
				<input id="submit" type="submit" name="sign_up" value="SIGN UP" class="btn btn-danger">
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



