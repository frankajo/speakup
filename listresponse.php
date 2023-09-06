 

 <?php include_once("nav_admin.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h3 class="mt-4 mb-3">
      <small>Support Given</small>
    </h3>

    <div class="row">
      <div class="col-lg-8 mb-4">

    
        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr>
              <th>#</th>
              <th>Partner_id</th>
              <th>Fullname</th>
              <th>Message</th>
              
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/response.php");

              // create Complaint object
              $resobj = new Response();

              // access listComplaint method
              $data = $resobj->listResponse(); 

              // echo "<pre>";
              // print_r($data);
              // echo "</pre>";

              // exit();

              
              // loop through the array
              if (count($data)> 0){
              foreach ($data as $key => $value){
                  $responseid = $value['response_id'];
                  
              ?>
              <tr>
                <td>#</td>
                <td><?php echo $value['partner_id']?></td>
                <td><?php echo $value['fullname']?></td>
                <td><?php echo $value['message']?></td>

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