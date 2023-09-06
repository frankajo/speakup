
	<?php 
   
		include_once("nav_admin.php");
    
     include_once "speak/constants.php";

	?>

  <!-- Page Content -->
  <link type='text/css' rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  <div class="container" style='min-height:500px'>

    <!-- Page Heading/Breadcrumbs -->
    <h3 class="mt-1 mb-2">

    	<?php 
    		if(isset($_SESSION['myrole'])){
    				echo $_SESSION['myrole'];
    		}
    	?>
    	
      <small>Super Admin Dashboard</small>
    </h3>

           <!-- Icon Cards 1-->
        <div class="row mt-2" style="background-color:#26053E">

           
          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users" style='font-size:24px'></i>
                </div>
                <div class="mr-5" align="center">All Victims</div>
                <?php                    

                    $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                    $vic = "SELECT victim_id FROM victim ORDER BY victim_id";
                    $vic_run = mysqli_query($dbcon, $vic);
                    $row = mysqli_num_rows($vic_run);

                    echo "<h4>$row</h4>";
                  ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="listvictim.php">
                <span class="float-left">View All Victims</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-comment"></i>
                </div>
                <div class="mr-5" align="center">All Complaint!</div>
                 <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $comp = "SELECT complaint_id FROM complaint ORDER BY complaint_id";
                  $comp_run = mysqli_query($dbcon, $comp);
                  $row = mysqli_num_rows($comp_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="listcomplaint.php">
                <span class="float-left">View All Complaint's</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5" align="center">Pending Complaints</div>
                <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $comp = "SELECT * FROM complaint WHERE complaint_status = 1";
                  $comp_run = mysqli_query($dbcon, $comp);
                  $row = mysqli_num_rows($comp_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="complaintpending.php">
                <span class="float-left">View All Pending</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5" align="center">Verify Complaints</div>
                <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $comp = "SELECT * FROM complaint WHERE complaint_status = 2";
                  $comp_run = mysqli_query($dbcon, $comp);
                  $row = mysqli_num_rows($comp_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="complaintverify.php">
                <span class="float-left">View All Verifying</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5" align="center">Support Given</div>
                <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $comp = "SELECT * FROM complaint WHERE complaint_status = 3";
                  $comp_run = mysqli_query($dbcon, $comp);
                  $row = mysqli_num_rows($comp_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="complainthelp.php">
                <span class="float-left">All Victims Supported</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5" align="center">All Close Cases</div>
                 <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $part = "SELECT * FROM complaint WHERE complaint_status = 4";
                  $part_run = mysqli_query($dbcon, $part);
                  $row = mysqli_num_rows($part_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="complaintclose.php">
                <span class="float-left">View All Closed Cases</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5" align="center">All Testimonial</div>
                 <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $part = "SELECT * FROM testimonial";
                  $part_run = mysqli_query($dbcon, $part);
                  $row = mysqli_num_rows($part_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="list_testimony.php">
                <span class="float-left">View All Testimonial</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5" align="center">Active Testimonial</div>
                 <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $part = "SELECT * FROM testimonial WHERE testimonial_status = 2";
                  $part_run = mysqli_query($dbcon, $part);
                  $row = mysqli_num_rows($part_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="activetestimony.php">
                <span class="float-left">View All Active Testimonial</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5" align="center">All Partners</div>
                 <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $part = "SELECT partner_id FROM partner ORDER BY partner_id";
                  $part_run = mysqli_query($dbcon, $part);
                  $row = mysqli_num_rows($part_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="listpartner.php">
                <span class="float-left">View All Partners</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>



          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-comment"></i>
                </div>
                <div class="mr-5" align="center">All Partners Support!</div>
                <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $rest = "SELECT response_id FROM response ORDER BY response_id";
                  $rest_run = mysqli_query($dbcon, $rest);
                  $row = mysqli_num_rows($rest_run);

                  echo "<h4>$row</h4>";
                ?>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="listresponse.php">
                <span class="float-left">View All Support</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5" align="center"><!-- All Testimonial --></div>
                <!--  <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $part = "SELECT * FROM testimonial";
                  $part_run = mysqli_query($dbcon, $part);
                  $row = mysqli_num_rows($part_run);

                  echo "<h4>$row</h4>";
                ?> -->
              </div>
              <a class="card-footer text-black clearfix small z-1" href="list_testimony.php">
                <span class="float-left"><!-- View All Testimonial --></span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div style="background-color: #F03E3E" class="col-xl-3 col-sm-6 mb-3 mt-3">
            <div style="border-radius: 20px;" class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-comment"></i>
                </div>
                <div class="mr-5" align="center"><!-- All Partners Support! --></div>
                <!-- <?php 
                  $dbcon = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

                  $rest = "SELECT response_id FROM response ORDER BY response_id";
                  $rest_run = mysqli_query($dbcon, $rest);
                  $row = mysqli_num_rows($rest_run);

                  echo "<h4>$row</h4>";
                ?> -->
              </div>
              <a class="card-footer text-black clearfix small z-1" href="listresponse.php">
                <span class="float-left"><!-- View All Partners --></span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

     	</div>		
	<!-- /.row -->



  </div>
  <!-- /.container -->

  <?php 
		include_once("logfooter.php");
	?>
	