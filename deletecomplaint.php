<?php 

include_once("header.php");
 ?>
<!---Page content --->

<div class="container">
	<h1 class="mt-4 mb-3">
		<small>Delete Complaint</small>
	</h1>
	<?php if (isset($_REQUEST['btndelete'])){
		#delete club
		include_once 'speak/complaint.php';
		//create object
		$obj = new Complaint();
		//make use of delete method
		$obj->deleteComplaint($_REQUEST['complaintid']);

		}


		if (isset($_REQUEST['btncancel'])) {
			#redirect to list complaint
			$msg = "no action performed";
			header("Location:listcomplaint.php?info=$msg");
			exit();
		}



	?>
		


	<div class="row">
		<div class="col-lg-8 mb-4">
			<?php 
			if (isset($_REQUEST['complaintid'])){
			 ?>
			<div class="alert alert-danger">
				<h3>Are you sure u want to delete <?php echo $_REQUEST['complaintid']; ?></h3>
			</div>
			<form method="post" action="deletecomplaint.php?complaintid=<?php echo $_REQUEST['complaintid']?>&complaintid=<?php echo $_REQUEST['complaintid']?>">
			<button type="submit" name="btndelete" class="btn btn-danger">Yes</button>
			<button type="submit" name="btncancel" class="btn btn-secondary">No</button>
			</form>
			<?php 
				}
			 ?>
		</div>
	</div>

</div>










 <?php include_once 'logfooter.php'; ?>