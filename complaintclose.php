 <?php include_once("nav_admin.php"); 


 // session_start();

 // if (!isset($_SESSION['admin_id'])){
 //    header('Location: login_victim.php');
 //    exit();
 // }

 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>All Victims Supported</small>
    </h1>

    <div class="row">
      <div class="col-lg-12 mb-4">

        <!-- <a href="#" class="btn btn-primary mb-3">Add Complaint</a> -->
        
        <?php if (isset($_REQUEST['m'])) {
        ?>
        <div class="alert alert-success">
          <?php echo $_REQUEST['m'];?>
        </div>
        <?php

        }?>


         <?php if (isset($_REQUEST['info'])) {
        ?>
        <div class="alert alert-warning">
          <?php echo $_REQUEST['info'];?>
        </div>
        <?php

        }?>

       




        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr style="background-color:lightgray; border-radius:5px">
              <th>#</th>
              <th>Full Name</th>
              <th>Message</th>
              <th>Complaint Status</th>
             <!--  <th>Action</th> -->
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/complaint.php");

              // create Complaint object
              $obj = new Complaint();

              // access listComplaint method
              $data = $obj->closeComplaint();


              // echo "<pre>";
              // print_r($data);
              // echo "</pre>";

              // exit();

              
              // loop through the array
              if (count($data)> 0){
              foreach ($data as $key => $value){
                  $complaintid = $value['complaint_id'];
                  
              ?>
              <tr>
                <td>#</td>
                
                <td><?php echo $value['firstname']?> <?php echo $value['lastname']?></td>
                <td><?php echo $value['message']?></td>
                <td><?php echo $value['complaint_status']?></td>

                
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