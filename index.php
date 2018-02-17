<html>


<?php 
 
require_once 'design.php';

 // initialize

// 
?>
<head>
<style type="text/css">

</style>
</head>

<body>
	
   <div id="preloader">      
      <div id="status">
         <img src="images/preloader.gif" height="64" width="64" alt="">
      </div>
   </div>


   <?php 
	require_once ('header.php');
?>


   <!-- Style Guide Section
   ================================================== -->
   <section id="styles" style="padding: 100px 0 72px; background: #fff;">

      <div class="row section-head">

         <h1>Welcome To Online FIR Management System </h1>
         <p>
         	This WebSite will Provide online FIR submission facility.
           </p>
           
         	<h1><a href="login.php"> click Here For Login </a></h1>
       

         <p class="lead add-bottom">
         </p>                 

      </div> <!-- Row End-->
   </section> <!-- Style Guide Section End-->


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