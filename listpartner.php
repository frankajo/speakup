 <?php include_once("nav_admin.php"); ?>
 
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>All Partners</small>
    </h1>

    <div class="row">
      <div class="col-lg-8 mb-4">

       <!--  <a href="addpertner.php" class="btn btn-primary mb-3">Add Addpartner</a> -->

        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr>
              <th>#</th>
              <th>Partnerid</th>
              <th>Fullname</th>
              <th>Phonenumber</th>
              <th>Email</th>
              <!-- <th>Action</th> -->
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/partner.php");

              // create Club object
              $patobj = new Partner();

              // access listClubs method
              $data = $patobj->listPartner(); 

              // echo "<pre>";
              // print_r($data);
              // echo "</pre>";

              // exit();

              
              // loop through the array
              if (count($data)> 0){
              foreach ($data as $key => $value){
                  $partnerid = $value['partner_id'];
                  
              ?>
              <tr>
                <td>#</td>
                <td><?php echo $value['partner_id']?></td>
                <td><?php echo $value['fullname']?></td>
                <td><?php echo $value['phonenumber']?></td>
                <td><?php echo $value['email']?></td>

                <!-- 
                <td>
                  <a href="editparner.php?partnerid=<?php echo $partnerid ?>">Edit</a> | 
                  <a href="deletepartner.php?partnerid=<?php echo $partnerid ?>&fullname=<?php echo $value['fullname'];?>"> Delete</a>
                </td> -->
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