 <?php  include_once "header.php"; ?>

 <!DOCTYPE html>

	<html lang="en">
		


		    <head>
		    	
		<title>Partner Sign Up</title>


		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
		

				<style></style>

		</head>



		<body>

			 <?php 
			// check if register button is clicked
			 		if(isset($_POST['btnregister'])){

			// validate input
			 		if(empty($_POST['fullname'])){
			 			$errors['fulltname'] = "fullname field is required";
			 		}

			 		if(empty($_POST['phonenumber'])){
			 			$errors['phonenumber'] = "phonenumber field is required";
			 		}

			 		if(empty($_POST['email'])){
			 			$errors['email'] = "email field is required";
			 		}

			 		if(empty($_POST['password'])){
			 			$errors['password'] = "password field is required";
			 		}elseif (strlen($_POST['password']) < 6) {
			 			$errors['password'] = "Password must be more than five Xters";
			 		}

			// sanitize input
			 	//check if there is no errors before sanitize code can run
			 		if(empty($errors)){

			 	//include class common where all nanitizing is done
			 			include_once "speak/common.php";
			 			$comobj = new Common;

			 	//make use of sanitizeInput method
			 			$fullname = $comobj->sanitizeInputs($_POST['fullname']);
			 			$phonenumber = $comobj->sanitizeInputs($_POST['phonenumber']);			 			
			 			$email = $comobj->sanitizeInputs($_POST['email']);
			 			$password = $_POST['password'];

			 	//create object of class victim to pass parameter for sign-up
			 			include_once "speak/partner.php";
			 			$partobj = new Partner();

			 	// store what is returned in an out variable
			 			$output = $partobj->signUp($fullname, $phonenumber, $email, $password);

			 			if($output == true){
			 		//redirect to successfull page
			 				header("Location: dashboard_partner.php");
			 			}else{
			 				$errors[] = "Oops! something happened: Try again later";
			 			}
			 		}

			 	}

			 ?> 



<div class="container">
<!-- Opening of div container -->
	 <div class="row">

<!-- Image of Justice -->
	 	 <div class="col-md-8 mt-2">
	 		<img src="images/just2.jpg" alt="my photo" class="" width="745px">
	 	 </div>


<!-- Form dive Start here -->
	 	<div class="col-md-4 mt-4">

	 		<!--<a href="home.html"><i class="fas fa-phone"></i></a>-->

	 			<h5>Partner's Sign-Up</h5>

	 			<?php  
					if (!empty($errors)) {
						echo "<ul class='alert alert-danger'>";
						foreach ($errors as $key => $value) {
							echo "<li>$value</li>";
						}
						echo "</ul>";
					
					}
				?>

				<!-- <h3 class="errorMessage">Please enter all required fields</h3> -->

	 		<form method="post" action="" onsubmit="return signup()">

	 			<div class="col-mb-3">
				<label for="fullname">Fullname</label><span style='color:red'>*</span>
		        <input type="text" name="fullname" id="firstname" class="form-control" value="">
				</div>

	 		 	<div class="col-mb-3">
	 			<label for="phonenumber">Phonenumber</label><span style='color:red'>*</span>
	 			<input type="phone" name="phonenumber" id="phonenumber" class="form-control" value="">
	 		 	</div>

	 			<div class="col-mb-3">
	 			<label for="email">Email</label><span style='color:red'>*</span>
	 			<input type="text" name="email" id="email" class="form-control" value="">
	 			</div>

	 			<div class="col-mb-3">
	 			<label>Password</label><span style='color:red'>*</span>
	 			<input type="password" name="password" id="password" class="form-control" value="">
	 			</div>

			    <button type="button" class="btn-light mt-3" onclick="showpassword()">showpassword</button>
	 			

	 			<input type="checkbox" name="checkbox" id="check"> <span style="font-size: 12px;"> By clicking Sign Up, you agree to our     <span style="color:blue">Terms</span> and that you have read our <span style="color:blue">Data Policy</span></span><br><br>

	 		<button name="btnregister" type="submit" class="btn-outline-primary">Register</button>

	 		<button name="btnlogin" type="submit" id="btn2" class="btn-outline-success">
	 		<a href="login.php"> Click Here To Login</a></button>

	 		</form>


	 	</div>
	 </div>		
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
