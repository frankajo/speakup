<?php 

	session_start();
	
	if(!isset($_SESSION['myprotect'])){
		header('Location: login_victim.php');
		exit();

		
	}
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
							margin-left: 50px;
							padding-top: 40px;
							font-family: warnock, display;
							font-size: 30px;
							color: #F03E3E;
							font-style: oblique;
						}

						ul li{

								display: inline-block;
								padding-left: 40px;
								padding-bottom: 20px;
								margin-top: 50px;
								text-decoration: none;
							}

						ul li a{
							text-decoration: none;
							color: white;
						}

						#navDropdown{
							color: white;
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
			<div class="logo">SPEAKUP</div>
			<!-- <img src="images/logo.jpg" alt="mylogo" id="logoimg"> -->
		</div>

		<div class="col-md-10">
		  <ul style="list-style: none;">
	      		<li><a href='home.php'>Home</a></li>
	       	     <li><a href='about.php'>About Us</a></li>
		   		 <li><a href='services.php'>Services</a></li>
		    	 <li><a href='supportus.php'>Support Us</a></li>
		    	 <li><a href='news.php'>News</a></li>
		    	 <li><a href='offices.php'>Offices</a></li>



		   		<li class="nav-item dropdown">
		   		 	<a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>

		   		 	<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           		 <li><a class="dropdown-item" href="photos.php">Photo Galary</a></li>
            	 <li><a class="dropdown-item" href="videos.php">Videos</a></li>
             	 <li><hr class="dropdown-divider"></li>
                 <li><a class="dropdown-item" href="project.php">Projects</a></li>
          		</ul>
		   	   </li>

		   	   <li><a href='login_victim.php'>Logout</a></li>
		  </ul>
		</div>

	</div>
		<!-- Nav Bar ends here -->			
	


<!--losing of div container -->
</div>
					    			



 	
 <!--JS File-->
	 <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

			    	</body>


	</html>