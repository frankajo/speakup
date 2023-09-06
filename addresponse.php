
<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Speak UP</title>
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
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="text-align:center">Give Support</h3>
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
						include_once "speak/response.php";

						$resobj = new Response();
						
						
						$partnerid = $_SESSION['partner_id'];
						// $supportid = $_SESSION['support_id'];

						// var_dump($supportid);

						$output = $resobj->insertResponse($partnerid, $_POST['fullname'], $_POST['sup'], $_POST['message']);

						if ($output == true) {
							# redirect
							header("Location: dashboard_partner.php");
							exit;
						}else{
							echo "<div class='alert alert-danger'>Could not add response now. Try again later!</div>";
						}
					}
				?>


				<form method="post" action="">

					<div class="mb-3">
						<label for="fullname">Fullname</label>
						<input type="text" name="fullname" id="fullname" class="form-control">
					</div>
					<div class="mb-3">
						<label for="sup">Support Type</label>
						<select name="sup" id="sup" class="form-select">
							<option value="">Choose Support</option>

							<?php  
								include_once "speak/response.php";

							//create object of class Complaint
								$obj = new Response();

							//make refrence to getViolence
								$suprts = $obj->getSupporttype();

								foreach ($suprts as $key => $support) {
									$supportid = $support['support_id'];
									$supporttype = $support['support_type'];

							if ($supportid == $data['support_id']) {
                        echo "<option value='$supportid' selected>$supporttype </option>";
                      }else{

                      echo "<option value='$supportid'>$supporttype</option>";
                    }


				}
			?>

						</select>
					</div>
					
					<div class="mb-3">
						<label for="message">Support</label>
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

<?php include_once('logfooter.php'); ?>