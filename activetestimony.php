 <?php include_once("nav_admin.php"); 


 // session_start();

 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>All Active Testimony</small>
    </h1>

    <div class="row">
      <div class="col-lg-12 mb-4">


        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr style="background-color:lightgray; border-radius:5px">
              <th>#</th>
              <th>Testimonial ID</th>
              <th>Full Name</th>
              <th>Message</th>
              <th>Testimonial Status</th>
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/testimonial.php");

              // create Complaint object
              $obj = new Testimonial();

              // access listComplaint method
              $data = $obj->listActiveTestimonial();


              // echo "<pre>";
              // print_r($data);
              // echo "</pre>";

              // exit();

              
              // loop through the array
              if (count($data)> 0){
              foreach ($data as $key => $value){
                  $complaintid = $value['testimonial_id'];
                  
              ?>
              <tr>
                <td>#</td>
                <td><?php echo $value['testimonial_id']?></td>
                <td><?php echo $value['firstname']?> <?php echo $value['lastname']?></td>
                <td><?php echo $value['message']?></td>
                <td><?php echo $value['testimonial_status']?></td>

                
              </tr>
              <?php 
                  }
                }
              ?>
          </tbody>
        </table>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

   <?php include_once("logfooter.php"); ?>