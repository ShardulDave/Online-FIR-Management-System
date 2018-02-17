<?php 

session_start();

require_once ('connection.php');

$suspect1="";
$suspect2="";
$suspect3="";
$suspect4="";



if(isset($_POST['suspect']))

{
	
    $suspect1=$_POST['suspect1'];
	$suspect2=$_POST['suspect2'];
	$suspect3=$_POST['suspect3'];
	$suspect4=$_POST['suspect4'];
    $uname = $_SESSION['user_name'];

    $bResult = mysqli_query($con, "SELECT * FROM faces WHERE username = '$uname' ORDER BY id DESC LIMIT 0, 1");
          

          while($rows = mysqli_fetch_array($bResult,MYSQL_ASSOC))
			{ 
			$id = $rows['id'];
            }
	
	    
         
            
            if(strlen($suspect1)== '')
			{
				echo "<script>alert('Enter Suspect Name')</script>";
			}
			elseif (strlen($suspect2)== '')
			{
				echo "<script>alert('Enter Suspect Name'')</script>";
			}
			elseif(strlen($suspect3) == '')
			{
			    echo "<script>alert('Enter Suspect Name'')</script>";
			}

			elseif(strlen($suspect4) == '')
			{
			    echo "<script>alert('Enter Suspect Name'')</script>";
			}
			

			else 
			{

                $aResult = mysqli_query($con, "UPDATE faces SET suspect1='$suspect1', suspect2='$suspect2', suspect3='$suspect3', suspect4='$suspect4' WHERE username='$uname' AND id='$id'");

                 header("Location: statement.php");
             
                 


               
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
	require_once ('logout_header.php');
	?>

<form action="<?php echo($_SERVER["PHP_SELF"]);?>" method="post"  name="form1" enctype="multipart/form-data">

	 <section id="hero"  style="padding: 60px 72px; background: #fff; text-align: center;">
	 	<h1>Phase 3 : Suspect Info</h1>
	 	<div class="container">

 		<div class="jumbotron">
			
	
	    <div>
			<input id="suspect1" type="text" name="suspect1" placeholder="Suspect-1 Name" 
			 value="<?php echo $suspect1;?>" required >
		</div>

		<div class="form-group">
  			 <input id="suspect2" type="text" name="suspect2" placeholder="Suspect-2 Name"  maxlength="20" size="43" value="<?php echo $suspect2;?>" required>
		</div>

		<div>
			<input id="suspect3" type="text" name="suspect3" placeholder="Suspect-3 Name" 
			 value="<?php echo $suspect3;?>" required >
		</div>

		<div class="form-group">
  			 <input id="suspect4" type="text" name="suspect4" placeholder="Suspect-4 Name"  maxlength="20" size="43" value="<?php echo $suspect4;?>" required>
		</div>
		 
		 
		

		<div class="form-group" align="center">		
				<input id="submit" type="submit" name="suspect" value="NEXT" class="btn btn-danger">
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



