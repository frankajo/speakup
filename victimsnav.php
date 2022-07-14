<?php  
	session_start();
	if (!isset($_SESSION['victim_id'])) {
		# redirect the unauthenticated user to login/index
		// header("Location: index.php");
	}
?>
<div class="container">
	<div class="row">
	<div class="col-md-12">
	 <h5 style="padding: 5px; text-align: center; color: white;">Welcome, <?php echo $_SESSION['firstname']." ". $_SESSION['lastname']; ?></h5>
	</div>
	</div>
</div>


<div class="col-md-4 mt-2">

					  			<div style="background-color: black; height: 300px; border-radius: 10px;   margin-right: 10px;">
									<p align="center" style=" color: red; margin-top:5px; padding-top:55px">08083302128</p>
									<p align="center" style="color: white; font-style: italic">The Toll Free Number</p>
									<p align="center" style="color: white; font-style: italic;">To Report</p>
									<h4 align="center" style="color: white; font-style: italic;">DOMESTIC VIOLENCE</h4>
								</div>
					  		</div>

