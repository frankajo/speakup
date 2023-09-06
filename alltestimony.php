<?php 

include ('header.php');
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
			/*border: 1px solid black;
			min-height: 100px;*/
		}
		#all{
			background-color: lightgrey;
			border-radius: 10px;
			padding: 10px;
			margin: 5px;
			
		}

		
	</style>

	
</head>
<body>
		<!-- <h5>General Message Page</h5> -->

	<div class="container">

		
		<div class="row mt-4">

			<?php 
				include_once 'speak/testimonial.php';
				$obj = new Testimonial();
				$testimonial = $obj-> listActiveTestimonial();

					foreach($testimonial as $key=>$value){

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