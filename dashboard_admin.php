
	<?php 
		include_once("nav_admin.php");
    session_start();
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
    	
      <small>Super Admin Dashboard</small>
    </h1>

           <!-- Icon Cards 1-->
        <div class="row">

          <div style="background-color:" class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users" style='font-size:24px'></i>
                </div>
                <div class="mr-5">Victims</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listvictim.php">
                <span class="float-left">All Victims</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div style="background-color:" class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
                <div class="mr-5">Complaints</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listcomplaint.php">
                <span class="float-left">View All Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div style="background-color:" class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-users"></i>
                </div>
                <div class="mr-5">Partners</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listpartner.php">
                <span class="float-left">View All Partners</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div style="background-color:" class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-comment"></i>
                </div>
                <div class="mr-5">Partners Support!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="listresponse.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
     	</div>
		
		
	<!-- /.row -->


           <!-- Icon Cards 2-->
        <div class="row">

          <div class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-" style='font-size:24px'></i>
                </div>
               <!--  <div class="mr-5">Members</div> -->
              </div>
              <a class="card-footer text-white clearfix small z-1" href="admin.html">
                <span class="float-left">View Complain</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-list"></i>
                </div>
               <!--  <div class="mr-5">N5,000,000 Payment</div> -->
              </div>
              <a class="card-footer text-white clearfix small z-1" href="report.html">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa fa-comment"></i>
                </div>
               <!--  <div class="mr-5">10 Announcements</div> -->
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div style="border-radius: 50px;" class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div>
                  <i class="fa  fa-ban"></i>
                </div>
                <!-- <div class="mr-5">5 Failed Transactions!</div> -->
              </div>
              <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">View Details</span>
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
	