 <?php include_once("nav.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>List Of Complaint</small>
    </h1>

    <div class="row">
      <div class="col-lg-8 mb-4">

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
            <tr>
              <th>#</th>
              <th>complaint_id</th>
              <th>victim_id</th>
              <th>Violent_id</th>
              <th>Message</th>
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
                <td><?php echo $value['victim_id']?></td>
                <td><?php echo $value['violence_id']?></td>
                <td><?php echo $value['message']?></td>

                <td>
                  <a href="editcomplaint.php?complaintid=<?php echo $complaintid ?>"></a>  
                  <a href="deletecomplaint.php?complaintid=<?php echo $complaintid ?>&violenceid=<?php echo $value['violence_id'];?>"> <!-- Delete --></a>
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