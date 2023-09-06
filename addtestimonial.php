
<?php
// session_start();

include_once('nav.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Share Your Testimonial</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<style type="text/css">

		body{/*
			background-image: url(images/lib2.jpg);
			background-position: center;
			background-size: cover;
			font-family: sans-serif;
			margin-top: 40px;*/
			}
	</style>
</head>
<body style="background-color: silver;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h3 style="text-align:center;">Share Your Testimonial</h3>
			</div>
		</div>
	</div>

	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-6 mx-auto">

				<!-- includ victim nave inside the php -->


				<?php  
					//session_start();
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						include_once "speak/testimonial.php";

					//create object of testimonial
						$tesobj = new Testimonial();
						
					//create session variable
						$victimid = $_SESSION['victim_id'];
						
						// var_dump($testimonialid);
						// exit();

						$output = $tesobj->insertTestimonial($victimid, $_POST['firstname'], $_POST['lastname'], $_POST['message']);

						if ($output == true) {
							# redirect
							header("Location: dashboard_victim.php");
							exit;
						}else{
							echo "<div class='alert alert-danger'>Could not add response now. Try again later!</div>";
						}
					}
				?>


				<form method="post" action="">

					<div class="mb-3">
						<label for="fname">firstname</label>
						<input type="text" name="firstname" id="firstname" class="form-control">
					</div>

					<div class="mb-3">
						<label for="lname">Lastname</label>
						<input type="text" name="lastname" id="lastname" class="form-control">
					</div>
					
					<div class="mb-3">
						<label for="message">Message</label>
						<textarea name="message" id="message" class="form-control"></textarea>
					</div>


					<button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>


 <!--JS File-->
	
	 	
</body>
</html>

<?php include_once('logfooter.php') ?>