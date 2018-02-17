<?php 

session_start();

require_once ('connection.php');

$file="";
$file1="";
$file2="";
$file3="";


if(isset($_POST['evidence']))

{
	
   
$uname = $_SESSION['user_name'];


   $bResult = mysqli_query($con, "SELECT * FROM faces WHERE username = '$uname' ORDER BY id DESC LIMIT 0, 1");
          

          while($rows = mysqli_fetch_array($bResult,MYSQL_ASSOC))
			{ 
			$id = $rows['id'];
            }
   
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
                
                


                       $aResult = mysqli_query($con, "UPDATE faces SET add1='$filename', add2='$filename1', add3='$filename2', add4='$filename3' WHERE username='$uname' AND id='$id'");

                        header("Location: find_suspect.php");
	
				
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
	 	<h1>Phase 2 : Collect Evidence</h1>
	 	<div class="container">

 		<div class="jumbotron">
			
	
	     <div class="form-group">
			<input type="file" name="file[]" 
			 value="<?php echo $file;?>"/>			
		 </div>	

		  <div class="form-group">
			<input type="file" name="file[]" 
			 value="<?php echo $file1;?>"/>			
		 </div>	

		  <div class="form-group">
			<input type="file" name="file[]" 
			 value="<?php echo $file2;?>"/>			
		 </div>	

		  <div class="form-group">
			<input type="file" name="file[]" 
			 value="<?php echo $file3;?>"/>			
		 </div>	
		 
		 
		

		<div class="form-group" align="center">		
				<input id="submit" type="submit" name="evidence" value="NEXT" class="btn btn-danger">
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



