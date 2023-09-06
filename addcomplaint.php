
<?php
// session_start();

include_once('nav.php');
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

		body{
		/*	background-image: url(images/lib2.jpg);*/
			background-position: center;
			background-size: cover;
			/*font-family: sans-serif;
			margin-top: 40px;*/
			}
	</style>
</head>
<body style="background-color:silver;"><!-- 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Speak Up</h1>
			</div>
		</div>
	</div> -->

	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-3" style="border-right:">

				<!-- includ victim nave inside the php -->
				<?php ?>
			</div>
			<div class="col-md-5 mt-4">
				<h2 style="margin-top: 0px">Victim's Complaints</h2>
				<?php  
					//session_start();
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						include_once "speak/complaint.php";

						$compobj = new Complaint();
						

						$victimid = $_SESSION['victim_id'];
						$violenceid = $_SESSION['violence_id'];

						// var_dump($violenceid);

						$output = $compobj->insertComplaint($victimid, $_POST['vio'], $_POST['firstname'], $_POST['lastname'], $_POST['message']);

						if ($output == true) {
							# redirect
							header("Location: dashboard_victim.php");
							exit;
						}else{
							echo "<div class='alert alert-danger'>Could not add complaints now. Try again later!</div>";
						}
					}
				?>
				<form method="post" action="">


					<div class="mb-3">
						<label for="firstname">Firstname</label>
						<input type="text" name="firstname" id="firstname" class="form-control">
					</div>


					<div class="mb-3">
						<label for="lastname">Lastname</label>
						<input type="text" name="lastname" id="lastname" class="form-control">
					</div>

					<div class="mb-3">
						<label for="vio">Violence</label>
						<select name="vio" id="vio" class="form-select">
							<option value="">Choose Violence</option>

							<?php  
								include_once "speak/complaint.php";

							//create object of class Complaint
								$obj = new Complaint();

							//make refrence to getViolence
								$vois = $obj->getViolencetype();

								foreach ($vois as $key => $violence) {
									$voilenceid = $violence['violence_id'];
									$violencetype = $violence['violence_type'];

							if ($voilenceid == $data['violence_id']) {
                        echo "<option value='$voilenceid' selected>$violencetype </option>";
                      }else{

                      echo "<option value='$voilenceid'>$violencetype</option>";
                    }


								}
							?>

						</select>
					</div>
					
					<div class="mb-3">
						<label for="message">Complaints</label>
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