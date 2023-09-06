
<?php 
	include_once("header.php");
?>

<!DOCTYPE html>

	<html lang="en">
		


		    <head>
		    	
		<title>Home Page</title>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
		<script type="text/javascript" src="jquery.min.js"></script>




					<style>

						div{
							/*border: 1px solid black;
							min-height: 100px;*/
						}

			/*background picture start here*/
						#background{
							background-image: url(images/spk4.jpg);
							height: 650px;
							background-repeat: no-repeat;
							background-size: cover;
							background-attachment: fixed;
						} 

						#overlay{
							background-color: black;
							height: 650px;
							background-color: rgba(0, 0, 0, 0.5);
						}
			/*background picture ends here*/

						#services{
							text-align: center;
							margin-top: 40px;
							margin-bottom: 30px;
						}

						h1{
							color: white;
							font-style: italic;
							font-family: algerian;
							text-align: center;
							padding-top: 300px;
						}
						
						h3{
							color: black;
							text-align: center;
							font-style: italic;
						}

						#services{
							text-align: center;
							font-family:corbel, arial, san-serif;
							font-style: italic;
							font-size: 20px;
							color: purple;
							margin-top: 10px;
						}

						
						#divmacq{
							background: rgba(0, 0, 0, 0.6);  
							margin-top: 10px;
							margin-bottom: 8px;
							border-radius: 10px;
						}


			/*Footer start here*/
						#footer{
							background-color: black;
							border-radius: 10px;
						}

						li a{
							text-decoration: none;
							color: black;
						}

						
						h5{
							color: black;
							font-style: italic;
							text-align: center;
						}
			/*Footer ends here*/


						
					</style>

		    </head>



			  <body>
			  


<div class="container">
<!-- Opening of div container -->


<!-- Background image (fixed) start here -->
			<div class="row">
				<div class="col-md-12 mt-2" id="background">
					<div id="overlay">
						<h1>Support Us</h1>
					<div align="center">
	 				<button type="submit" id="btnlogin" class="btn btn-secondary">
	 				<a href="signup_partner.php" style="text-decoration: none; color: white;">Sign-Up</a></button>
	 				</div>
					</div>
				</div>

			</div>
<!-- Background image (fixed) Ends here -->



<!-- marquee start here -->	
		<div class="row">
		<div class="col-xl-12 col-md-12" id="divmacq">
			<marquee>
               <h6 style="margin-top:40px; font-size: 20px; padding-bottom: 10px; color: white">We are commited to bringing justice to your doorstep</h6>
            </marquee>
		</div>
		</div>	
<!-- marquee ends here -->



			<div class="row">
				<div class="col-md-12 mt-3">
					<h3><a href="donation.php" style="color:#F03E3E">Donate</a></h3>
				</div>
			</div>


			<div class="row">	
				<div class="col-md-4 mt-4">
					<p align="center">Your donation can save a life</p>
					<img src="images/vol3.jpg" alt="myphoto" class="img-fluid img-thumbnail">	
				</div>

				<div class="col-md-4 mt-4">
					<p align="center">Your donation can save a life</p>
					<img src="images/fin1.jpg" alt="myphoto" class="img-fluid img-thumbnail">
				</div>

				<div class="col-md-4 mt-4">
					<p align="center">Your donation can save a life</p>
					<img src="images/partners2.jpg" alt="myphoto" class="img-fluid img-thumbnail">
				</div>
			</div>




<!-- Volunteers for support start here -->
			<div class="row">
				<div class="col-md-12 mt-3">
					<h3>Volunteer</h3>
				</div>
			</div>



			<div class="row">
				<div class="col-md-12 mt-3">
					<h6 style="text-align: center; font-style: italic; font-size: 20px; font-family: monospace;">Here are some ways you can volunteer</h6>
				</div>
			</div>


			<div class="row">

				<div class="col-md-4 mt-3">
						
					<!-- <p align="center" style="color:red"><i class="fas fa-phone"></i></p> -->
					
                        <h4>Crisis Line Advocate</h4>  
                    <span>      
                       Hotline advocates answer SpeakUp 24-hour hotline from our confidentially-located safe house. Advocates screen for admittance to the house, help callers create plans for their safety, offer information about SpeakUp services, explore resources and provide referrals. 
                    </span>
				</div>

				<div class="col-md-4 mt-3">
					 		

						<!-- <p align="center" style="color:red"><i class="fas fa-home"></i></p> -->
                          <h4>Safe House Advocate</h4>
                    <span>
                       Volunteer positions at the safe house include both direct and indirect service opportunities including infant and toddler care, assisting with children's activities, transportation assistance, providing activities or educational opportunities for guests, one-on-one peer advocacy, and organization of donations. 
                    </span>

				</div>

				<div class="col-md-4 mt-3">
							
						<!-- <p align="center" style="color:red"><i class="fas fa-child"></i></p>  -->
							<h4>Children's Advocate</h4>    
                    <span>
                       Volunteers spend quality time with child and teenage safe house guests, developing trusting relationships and modeling healthy interactions with others. Mentors help with homework, play games, supervise art projects, facilitate conversation groups, and chaperone outings. 
                    </span>

				</div>
				
			</div>


			<div class="row">
				<div class="col-md-4 mt-3">
				<img src="images/vol4.jpg" alt="myphoto" class="img-fluid img-thumbnail">		
				</div>

				<div class="col-md-4 mt-3">
				<img src="images/vol1.jpg" alt="myphoto" class="img-fluid img-thumbnail">		
				</div>

				<div class="col-md-4 mt-3">
				<img src="images/vol2.jpg" alt="myphoto" class="img-fluid img-thumbnail">	
				</div>
			</div>

			
<!-- Volunteers for support ends here -->
					
		
<!--Closing of div container -->
</div>

 	
 <!--JS File-->
	 <script type="text/javascript" src="js/bootstrap.bundle.js"></script>

		</body>
	</html>

	<?php include_once "footer.php"; ?>