
<?php 

 include_once("header.php");

//start session here
	session_start();

//check if the user clicked the login button
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

//include class file
		include_once('speak/victim.php');

//create object of victim class
		$vtobj = new Victim();

//to make reference to login funtion
		$output = $vtobj->login($_POST['username'], $_POST['password']);

		if($output == false){
			echo "<div class= 'alert alert-danger text-center'>Invalid username or password</div>";

		}else{
// login successfull, then redirect to dashboard/landing page
			header("Location: dashboard_victim.php");
				exit();
		}

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
		<script type="text/javascript" src="jquery.min.js"></script>




	<style></style>

		    </head>
			  <body>
			  


<div class="container">
<!-- Opening of div container -->



	<div class="row">

<!-- Image of Justice -->
	 

<!-- Form dive Start here -->
		
	 	<div class="col-md-6 mt-3">
	 			<h5 align="center">Login</h5>

	 			<?php 
	 				// if(isset($error)){
	 				// 	echo $error;
	 				// }
	 			?>


	 		<form method="post" action="" onsubmit="return login()">
	 			
	 		<div>
	 		<input type="text" name="username" id="username" class="form-control" placeholder="User Name"><br>	 </div>			
	 		
	 		<div>
	 		<input type="text" name="password" id="password" class="form-control" placeholder="Password">
	 		</div>	
<!-- 
	 	    <span style="font-size: 12px"> Forgot Password? Click <span style="color:blue">here</span> to reset <span style="color:blue">
	 	    </span></span> --><br>

	 	     <button type="button" class="btn-light" onclick="showpassword()">showpassword</button><br><br>
	 			
	 		<div>
	 		<button type="submit" id="btnlogin" class="btn btn-secondary form-control">Login here</button>
	 	    </div><br>


	 	     <div>
	 		<button type="submit" id="btnlogin" class="btn btn-success form-control">
	 			<a href="login_partner.php" style="text-decoration: none; color: white;">Login as Partner</a></button>
	 	    </div><br>


	 	     <div>
	 		<button type="submit" id="btnlogin" class="btn btn-info form-control">
	 			<a href="login_admin.php" style="text-decoration: none; color: white;">Login as Admin</a></button>
	 	    </div>


	 		<span style="font-size: 12px">Don't have an account yet? Click <span style="color:blue"><a href="signup.php">here</a></span> to sign up.
	 		<span style="color:blue">
	 	    </span></span>
	 	</form>
	 </div>

	 	<div class="col-md-6 mt-4">
	 		<h5 align="center">We bring you hope and justice</h5>
	 		<img src="images/hope1.jpg" alt="my photo" class="img-fluid">
	 	</div>

	</div>


</div>


 	
 <!--JS File-->
	
	 	<script type="text/javascript" language='javascript'>

	 		//login function start here
	 				function login(){
	 					var username = document.getElementById('username').value;
	 					var password = document.getElementById('password').value;

	 					if(username.trim() =="" || password.trim() ==""){
	 						alert("Please enter a valid username and password");
	 						return false;
	 					}else{
	 						return true;
	 					}
	 				}

	 				function showpassword(){
	 					var showpassword = document.getElementById('password').type;

	 					if(showpassword == 'password'){
	 						document.getElementById('password').type='text';
	 					}else{
	 						document.getElementById('password').type='password';
	 					}
	 				}


	 		//login function end here
	</script>

			    	</body>


	</html>


<?php include_once "footer.php"; ?>
