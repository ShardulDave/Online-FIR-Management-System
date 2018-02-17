<?php
session_start();
require_once 'connection.php';
if(isset($_POST['login']))
{
	
	
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];

$query = "SELECT * FROM regist WHERE user_name='$user_name'";
$result=mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($row['user_name']!="admin")
{
	if($row['user_name']==$user_name && $row['pass']==$pass)
	{
		$_SESSION['user_name']=$user_name;
		$_SESSION['alrt']=0;	
	    header("Location: collectinfo.php");
	}
	
}

else if($row['user_name']=="admin" && $row['pass']=="admin@123")
{
	$_SESSION['user_name']=$user_name;	
	header("Location: myresult.php");
}	
else
{
	echo "<script>alert('Invalid')</script>";
	//header("Location:login.php");
	
}
}	
?>


<html>
<head>
<?php 
require_once 'design.php';
?>

</head>

<body >

		<?php 
	require_once ('header.php');
?>


	
	 <section id="hero" style="padding: 90px 72px; background: #fff;text-align: center;">
				<h1>Login</h1>
			<div class="container">
 				 <div class="jumbotron">
	
	
	<form method="post" action="login.php"  name="form1">
			<div>
				<input type="text" name="user_name"  placeholder="Enter User Name"  required />
			</div>
			<div>
				<input type="password" name="pass" placeholder="Enter Password" required />
			</div>
			<div>
			
				<a href="signup.php">New User </a> 
			</div>
			<div>
				<input type="submit" name="login" value="LOGIN" >
			</div>
				</form>
		</div>
		</div>
	
	</section>




	<?php 
	require_once ('footer.php');
	?>

   
 
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