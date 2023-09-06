 <?php include_once("nav_admin.php"); 


 session_start();

 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>Assigning Support</small>
    </h1>

    <div class="row">
      <div class="col-lg-12 mb-4">
    

        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr style="background-color:lightgray; border-radius:5px">
              <th>#</th>
              <th>Complaint ID</th>
              <th>Full Name</th>
              <th>Violent Type</th>
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
              $data = $obj->listComplaint();


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
                <td><?php echo $value['complaint_id']?></td>
                <td><?php echo $value['firstname']?> <?php echo $value['lastname']?></td>
                <td><?php echo $value['violence_type']?></td>
                <td><?php echo $value['message']?></td>

                <td>
                  <?php echo $value['complaint_status']?>

                  <a href="helped.php?complaintid=<?php echo $complaintid ?>&firstname=<?php echo $value['firstname']; ?>&lastname=<?php echo $value['lastname']; ?>&complaintstatus=<?php echo $value['complaint_status']; ?>" class="btn btn-success" id="btnhelp">status</a> 
                   
                 </td> 

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