
	<?php 
  session_start();
		include_once("nav.php");
	?>

  <!-- Page Content -->
  <link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <div class="container" style='min-height:300px'>

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">

    	<?php 
    		if(isset($_SESSION['myrole'])){
    				echo $_SESSION['myrole'];
    		}

    	?>
    	
      <small>Victims Page</small>
    </h1>

        <h5>Welcome
          <?php

            if (isset($_SESSION['firstname'] )) {
          echo $_SESSION['firstname'];

        }

           if (isset($_SESSION['lastname'] )) {
          echo $_SESSION['lastname'];
        }

        
        ?>
            <!-- <br>feel free to speak up. -->
        </h5>

           <!-- Icon Cards 1-->
        <div class="row">

          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment" style='font-size:24px'></i>
                </div>
                <div class="mr-5">Complaint</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="addcomplaint.php">
                <span class="float-left">Lodge Complaint</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5">Feedback</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listresponse.php">
                <span class="float-left">View Response</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

		
	<!-- /.row -->

		
		
	<!-- /.row -->

  </div>
  <!-- /.container -->

  <?php 
		include_once("logfooter.php");
	?>
	