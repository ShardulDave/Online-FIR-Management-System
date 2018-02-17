<?php 

require_once ('connection.php');
$aadhar_id="";
$nameuser="";
$address="";
$city="";
$birth_date="";
$election_card_no="";
$ration_card="";
$file="";
$file1="";
$file2="";
$file3="";


if(isset($_POST['aadhar']))
{
	
    $aadhar_id=$_POST['aadhar_id'];
	$nameuser=$_POST['nameuser'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$birth_date=$_POST['birth_date'];
	$election_card_no=$_POST['election_card_no'];
	$ration_card=$_POST['ration_card'];
	
	
	


	

		  if(strlen($aadhar_id)!=12)
			{
				echo "<script>alert('Aadhar Number must be 12 digits')</script>";
			}
			elseif (strlen($nameuser)>=20)
			{
				echo "<script>alert('Name should be less than 20')</script>";
			}
			elseif (strlen($address)>=20)
			{
			    echo "<script>alert('Address should be less than 20')</script>";
			}
			elseif (strlen($city) >=20)
			{
				echo "<script>alert('City Name should be less than 20')</script>";
			}

			elseif(strlen($election_card_no) != 12)
			{
				echo "<script>alert('Election card Number must be 12 digits')</script>";
				
			}

			elseif(strlen($ration_card) != 12)
			{
				echo "<script>alert('Ration card number must be 12 digits')</script>";
				
			}

			else 
			{

				 $path = "uploads/";
				 $count = 0;

				  foreach ($_FILES['file']['name'] as $f => $name) {     
	   	       
	    
	        
	            if(move_uploaded_file($_FILES["file"]["tmp_name"][$f], $path.$name))
	            $count++; // Number of successfully uploaded file
	       
}
                 $filename=basename( $_FILES['file']['name'][0]);
     
                 $path = $path . basename( $_FILES['file']['name'][0]);

                 $filename1=basename( $_FILES['file']['name'][1]);
     
                 $path = $path . basename( $_FILES['file']['name'][1]);

                 $filename2=basename( $_FILES['file']['name'][2]);
     
                 $path = $path . basename( $_FILES['file']['name'][2]);

                 $filename3=basename( $_FILES['file']['name'][3]);
     
                 $path = $path . basename( $_FILES['file']['name'][3]);
                  
                 
	// Loop $_FILES to exeicute all files
	            
                
                
                 

                      $aResult = mysqli_query($con, "INSERT INTO aadhar (Aadhar_Id,Name,Address,City,DOB,Election_Number,Ration_Number,Address_Proof,Birth_Certi,Election_Docs,Ration_Docs) values ('$aadhar_id','$nameuser','$address','$city','$birth_date','$election_card_no','$ration_card','$filename','$filename1','$filename2','$filename3')");

                       // update_value($_SESSION['my_variable'])
                        $_SESSION['adhar_session']=1; 
                        $aadhar_id="";
						$nameuser="";
						$address="";
						$city="";
						$birth_date="";
						$election_card_no="";
						$ration_card="";

						
						echo "<script>alert('Aadhar Detail Submitted Successfully');
						  window.location.href = 'index.php';</script>";

						//header("Location: index.php");


    
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
	 	<h1>Aadhar Detail</h1>
	 	<div class="container">

 		<div class="jumbotron">
			
	
	
		 <div>
  			 <input id="aadhar_id" type="text" name="aadhar_id"  placeholder="AadharId"
  			 value="<?php echo $aadhar_id;?>"  required>  			 
		</div>
		
		<div>
			<input id="nameuser" type="text" name="nameuser" placeholder="Name" 
			 value="<?php echo $nameuser;?>" required >
		</div>

		<div class="form-group">
  			 <input id="address" type="text" name="address" placeholder="Address"  maxlength="20" size="43" value="<?php echo $address;?>" required>
		</div>

		<div class="form-group">
  			 <input id="city" type="text" name="city" placeholder="City"  maxlength="20" size="43" value="<?php echo $city;?>" required>
		</div>

	    <div class="form-group">
  			 <input id="birth_date" type="date" name="birth_date" placeholder="Date Of Birth"  maxlength="20" size="43" value="<?php echo $birth_date;?>" required>
		</div>

		
		 <div class="form-group">
			<input id="election_card_no" type="number" name="election_card_no" placeholder="Enter Election Card Number" 
			value="<?php echo $election_card_no;?>" required>			
		 </div>	
		 
		 <div class="form-group">
			<input id="ration_card" type="number" name="ration_card" placeholder="Enter Ration Card Number" 
			value="<?php echo $ration_card;?>" required>			
		 </div>	
		 
		 <center>
		 <div class="form-group">
			Address Proof<span><input type="file" name="file[]" 
			 value="<?php echo $file;?>"/></span>		
		 </div>	
		 

		  <div class="form-group">
			Birth Certificate<input type="file" name="file[]" 
			 value="<?php echo $file1;?>"/>			
		 </div>	

		  <div class="form-group">
			Election Card<input type="file" name="file[]" 
			 value="<?php echo $file2;?>"/>			
		 </div>	

		  <div class="form-group">
			Ration Card<input type="file" name="file[]" 
			 value="<?php echo $file3;?>"/>			
		 </div>	
		</center>

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



