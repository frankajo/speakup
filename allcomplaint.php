<?php 

include ('nav_partner.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
		<script type="text/javascript" src="jquery.min.js"></script>

	<style type="text/css">
		div{
			/*border: 1px solid black;*/
			min-height: 100px;
		}
		#all{
			background-color:;
			margin-top: 10px;
			padding-left: px;
			border: 1px dotted red;
			border-radius: 15px;
		}

		body{/*
			background-image: url(images/spk4.jpg);
			background-position: center;
			background-size: cover;
			font-family: sans-serif;
			margin-top: 40px;*/
			}
		
	</style>

	
</head>
<body>
		<!-- <h4>General Message Page</h4> -->

	<div class="container">

		
		<div class="row mt-3">

			<?php 
				include_once 'speak/complaint.php';
				$obj = new Complaint();
				$complaint = $obj->listComplaint();

					foreach($complaint as $key=>$value){

				 ?>
				
				<div class="col-md-3" id="all"><?php echo $value['message'] ?></div>
				
				<?php 
				}
			?>
		</div>
		

	</div>


</body>
</html>

<?php 

include ('logfooter.php');
?>