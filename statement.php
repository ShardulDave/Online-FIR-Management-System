<?php 

session_start();

require_once ('connection.php');

$statement1="";
$statement2="";
$statement3="";
$statement4="";



if(isset($_POST['statement']))

{
	
    $statement1=$_POST['statement1'];
	$statement2=$_POST['statement2'];
	$statement3=$_POST['statement3'];
	$statement4=$_POST['statement4'];
    $uname = $_SESSION['user_name'];

    $bResult = mysqli_query($con, "SELECT * FROM faces WHERE username = '$uname' ORDER BY id DESC LIMIT 0, 1");
          

          while($rows = mysqli_fetch_array($bResult,MYSQL_ASSOC))
			{ 
			$id = $rows['id'];
            }
	
	    
         
            
            if(strlen($statement1)== '')
			{
				echo "<script>alert('Enter Statement')</script>";
			}
			elseif (strlen($statement2)== '')
			{
				echo "<script>alert('Enter Statement')</script>";
			}
			elseif(strlen($statement3) == '')
			{
			    echo "<script>alert('Enter Statement')</script>";
			}

			elseif(strlen($statement4) == '')
			{
			    echo "<script>alert('Enter Statement')</script>";
			}
			

			else 
			{



                $aResult = mysqli_query($con, "UPDATE faces SET statment1='$statement1', statment2='$statement2', statment3='$statement3', statment4='$statement4' WHERE username='$uname' AND id='$id'");


                   
                    	$_SESSION['alrt']=1;
                  
                   
                      header("Location: collectinfo.php");
                     


               
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
	 	<h1>Phase 4 : Statement Detail</h1>
	 	<div class="container">

 		<div class="jumbotron">
			
	
	    <div>
			<textarea id="statement1" rows="5" cols="100" name="statement1" placeholder="Enter Statement-1" 
			 value="<?php echo $statement1;?>" required ></textarea>
		</div>

		 <div>
			<textarea id="statement2" rows="5" cols="100" name="statement2" placeholder="Enter Statement-2" 
			 value="<?php echo $statement2;?>" required ></textarea>
		</div>

		 <div>
			<textarea id="statement3" rows="5" cols="100" name="statement3" placeholder="Enter Statement-3" 
			 value="<?php echo $statement3;?>" required ></textarea>
		</div>

		 <div>
			<textarea id="statement4" rows="5" cols="100" name="statement4" placeholder="Enter Statement-4" 
			 value="<?php echo $statement4;?>" required ></textarea>
		</div>

		

		

		<div class="form-group" align="center">		
				<input id="submit" type="submit" name="statement" value="SUBMIT" class="btn btn-danger">
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



