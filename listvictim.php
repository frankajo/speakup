 <?php include_once("header.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>List Of Victims</small>
    </h1>

    <div class="row">
      <div class="col-lg-8 mb-4">

        <!-- <a href="addvictim.php" class="btn btn-primary mb-3">Add Victim</a> -->
        
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
              <th>Victimid</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Phonenumber</th>
              <th>dob</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/victim.php");

              // create Club object
              $vtmobj = new Victim();

              // access listClubs method
              $data = $vtmobj->listVictim(); 

              // echo "<pre>";
              // print_r($data);
              // echo "</pre>";

              // exit();

              
              // loop through the array
              if (count($data)> 0){
              foreach ($data as $key => $value){
                  $victimid = $value['victim_id'];
                  
              ?>
              <tr>
                <td>#</td>
                <td><?php echo $value['victim_id']?></td>
                <td><?php echo $value['firstname']?></td>
                <td><?php echo $value['lastname']?></td>
                <td><?php echo $value['phonenumber']?></td>
                <td><?php echo $value['dob']?></td>
                <td><?php echo $value['email']?></td>

                
                <td>
                  <a href="editvictim.php?victimid=<?php echo $victimid ?>">Edit</a> | 
                  <a href="deletevictim.php?victimid=<?php echo $victimid ?>&firstname=<?php echo $value['firstname'];?>"> Delete</a>
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