<!DOCTYPE html>

	<html lang="en">
		


		    <head>
		    	
		<title>Photo Gallary</title>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
		<script type="text/javascript" src="jquery.min.js"></script>




					<style>

						div{
							border: 1px solid black;
							min-height: 100px;
						}

						/* Navigation start here */
						#nav{
							background-color: black;
							border-radius: 10px;
						}

						#logoimg{
							height: 130px;
							border-radius: 50px;
						}

						ul li{

								display: inline-block;
								padding-left: 30px;
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




						h3{
							align-content: center;
							color: purple;
							text-align: center;
						}

						#dep{
							text-align: center;
							font-family:corbel, arial, san-serif;
							font-style: italic;
							font-size: 20px;
						}

						span{
							font-size: 12px;
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
						}
			/*Footer ends here*/
						
					</style>

		    </head>



			  <body>
			  


<div class="container">
<!-- Opening of div container -->


	
	<!-- Nav Bar Starts here -->
	<div class="row" id="nav">

		<div class="col-md-2">
			<img src="images/logo.jpg" alt="mylogo" id="logoimg">
		</div>

		<div class="col-md-10">
		  <ul style="list-style: none;">
	      		<li><a href='home.php'>Home</a></li>
	       	     <li><a href='about.php'>About Us</a></li>
		   		 <li><a href='services.php'>Services</a></li>
		    	 <li><a href='contactus.php'>Contact Us</a></li>
		    	 <li><a href='support.php'>Support Us</a></li>
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
		  </ul>
		</div>

	</div>
		<!-- Nav Bar ends here -->	

		<div class="row">

	 			<div class="col-md-4"></div>
	 			<div class="col-md-4"></div>
	 			<div class="col-md-4"></div>
	 	</div>

		<div class="row">

	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 	</div>

	 	<div class="row">
	 		<div class="col-md-4"></div>
		
<!-- Sliding (carousel) Starts Here -->
	
				<div class="col-md-8 mt-3" id="sliderdiv">
					 <div class="col-md-12">

 		           <div id="vio1a" class="carousel slide" data-bs-ride="carousel">
  			        <div class="carousel-inner">

   				      <div class="carousel-item active">
    			      <img src="images/lib1a.jpg" class="d-block w-100" alt="my photo">
     			      <div class="carousel-caption d-none d-md-block">
       			   	<h4 style="color: white; font-style: italic">You Can Come Out Of An Abusive Environment</h4>
     			      </div>
    		        </div>

    		         <div class="carousel-item">
     			       <img src="images/lib2a.jpg" class="d-block w-100" alt="my photo">
     		 	       <div class="carousel-caption d-none d-md-block">
     		        	<h4 style="color: Black; font-style: italic">The Joy Of Liberty</h4>
     			       </div> 
    		         </div>

    		       <div class="carousel-item">
      		    	<img src="images/sayno2b.jpg" class="d-block w-100" alt="my photo">
      		    	<div class="carousel-caption d-none d-md-block">
     			      <h4 style="color: Black; font-style: italic">You Can Say NO</h4>
    		     	  </div>
   			      </div>

   			       <button class="carousel-control-prev" type="button" data-bs-target="vio1a" data-bs-slide="prev">
   				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   				      <span class="visually-hidden">Previous</span>
    		       </button>
    		       <button class="carousel-control-next" type="button" data-bs-target="vio1a" data-bs-slide="next">
   			      	 <span class="carousel-control-next-icon" aria-hidden="true"></span>
   				       <span class="visually-hidden">Next</span>
  			      </button>
		       </div>
	       </div>  
       </div>
	  </div> 		


	 	</div>
		

	 	<div class="row">
	 	 	 	 	
	 		<div class="col-md-3"></div>
	 		<div class="col-md-3"></div>
	 		<div class="col-md-3"></div>
	 		<div class="col-md-3"></div>
	 	
		</div>


	 		<div class="row">

	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 			<div class="col-md-3"></div>
	 		</div>



<!--The Footer Div Here-->	

					 <div class="row">

					    		<div class="col-md-12 mt-3" id="footer">
					    			<p style="color:white; padding-top:10px" align="center"><i>@2022 by SpeakUp / Terms of Use / Privacy Policy...</i></p>
					    		</div>
					  </div>

<!-- Footer Div Ends Here -->

					
		
<!--losing of div container -->
</div>
					    			



 	
 <!-- Bootstrap java script goes here-->

					    <script type="text/javascript" src="jquery.min.js"></script>

					    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>



					    <script type="text/javascript" language='javascript'>


					//Sign-up function start here
							function signup(){
								var email = document.getElementById('email').value;
								var password = document.getElementById('password').value;

								if(email.trim() =="" && password.trim() ==""){
									alert("Please enter a valid email and password");
									return false;
								}else{
									return true;
								}
							}

							
						//to show password
					    	function showpassword(){
					    		var showpassword = document.getElementById('password').type;


					    		if (showpassword == 'password' ) {
					    			document.getElementById('password').type = "text";
					    		}else{
					    			document.getElementById('password').type = "password";
					    		}	
					    	}

					// Sign-up function ends here
					    </script>


					    
			    	</body>


	</html>
