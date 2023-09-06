
	<?php
	// ob_start();
	// if(!isset($_SESSION['myprotect']) && $_SESSION['myprotect'] != "freedomfighter"){
	// 	header('Location: login_admin.php');
	// 	exit();

		
	// }
	?>

<!DOCTYPE html>

	<html lang="en">
		


		    <head>
		    	
		<title></title>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">


					<style>

						div{
							/*border: 1px solid black;
							min-height: 100px;*/
						}

			/* Navigation start here */
			
						#nav{
							background-color: #26053E;
							border-radius: 10px;
						}

						.logo{
							margin-left: 30px;
							padding-top: 10px;
							font-family: warnock, display;
							font-size: 30px;
							color: #F03E3E;
							font-style: oblique;

						}
						div a{
							text-decoration: none;
						}

						#img{
							padding-top: 10px;
							 width: 70px;
							 border-radius: 50%;
						}

			/* Navigation ends here */

		

						

					</style>

		    </head>



			  <body>
			  


<div class="container mt-4">
<!-- Opening of div container -->

	
	<!-- Nav Bar Starts here -->
	<div class="row" id="nav">

		<div class="col-md-2">
			<div class="logo"><a href="dashboard_admin.php" style="color:#F03E3E">Dashboard</a></div>
			<!-- <img src="images/logo.jpg" alt="mylogo" id="logoimg"> -->
		</div>


		<div class="col-md-8">
		   	   <div class="logo"><a href='login_admin.php' style="color:#F03E3E">Logout</a></div>
		</div>

		<div class="col-md-2">
		   	   <img src="images/admin1.jpg" alt="myphoto"  id="img">
		</div>

	</div>
		<!-- Nav Bar ends here -->			
	


<!--losing of div container -->
</div>
					    			



 	
 <!--JS File-->
	 <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

			    	</body>


	</html>

	<?php ob_end_flush();?>