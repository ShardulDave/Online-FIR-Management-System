<?php 

session_start();

require_once ('connection.php');

$res = $_SESSION['alrt'];

if($res == 1){

	echo "<script>alert('Crime Investigation Is Completed')</script>";

}


$crime_time="";
$place="";
$crime_type="";


if(isset($_POST['collectinfo']))

{
	
    $crime_time=$_POST['crime_time'];
	$place=$_POST['place'];
	$crime_type=$_POST['crime_type'];
    $uname = $_SESSION['user_name'];
	
	    
         
            
            if(strlen($crime_time)== '')
			{
				echo "<script>alert('Enter Crime Time')</script>";
			}
			elseif (strlen($place)== '')
			{
				echo "<script>alert('Enter Place')</script>";
			}
			elseif(strlen($crime_type) == '')
			{
			    echo "<script>alert('Enter Crime Type')</script>";
			}
			

			else 
			{

				
               $aResult = mysqli_query($con, "INSERT INTO faces (username, crime_time,place,crime_type) values ('$uname','$crime_time','$place','$crime_type')");
             
                header("Location: collectevidence.php");
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
	require_once ('welcome_header.php');
	?>

<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post"  name="form1" enctype="multipart/form-data">

	 <section id="hero"  style="padding: 60px 72px; background: #fff; text-align: center;">
	 	<h1>Phase 1 : Collect Information</h1>
	 	<div class="container">

 		<div class="jumbotron">
			
	
	
		 <div>
  			 <input id="crime_time" type="time" name="crime_time"  placeholder="Crime Time"
  			 value="<?php echo $crime_time;?>"  required>  			 
		</div>
		<br>
		<div>
			<input id="place" type="text" name="place" placeholder="Place" 
			 value="<?php echo $place;?>" required >
		</div>

		<div class="form-group">
  			 <input id="crime_type" type="text" name="crime_type" placeholder="Crime Type"  maxlength="20" size="43" value="<?php echo $crime_type;?>" required>
		</div>

		
		 
		 
		

		<div class="form-group" align="center">		
				<input id="submit" type="submit" name="collectinfo" value="NEXT" class="btn btn-danger">
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



