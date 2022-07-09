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
	      <h5 style="padding: 5px; text-align: center; color: white;">Welcome, <?php echo $_SESSION['firstname']. " ". $_SESSION['lastname']; ?></h5>
		</div>
	</div>
</div>