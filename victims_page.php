 <?php include_once("nav.php"); 
   // session_start();
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small></small>
    </h1>
          <h5>
          <?php

            if (isset($_SESSION['firstname'] )) {

          echo $_SESSION['firstname'];

        }

           if (isset($_SESSION['lastname'] )) {
            
          echo $_SESSION['lastname'];
        }

        
        ?>
      </h5>
            <!-- <br>feel free to speak up. -->
        

    <div class="row">
      <div class="col-lg-8 mb-4">

        <table class="table table-bordered table-hover table-striped">
          <thread>
            <tr style="background-color:lightgray; border-radius:5px">
              <th>#</th>
              <th>Full name</th>
              <th>Violent Type</th>
              <th>Message</th>
              <th>Complaint Status</th>
             <!--  <th>Feedback</th> -->
            </tr>
          </thread>

          <tbody>
              <?php 
              include_once("speak/complaint.php");

              // create Complaint object
              $obj = new Complaint();

              // session_start();

              // access listVictimcomplain method
              $data = $obj->listVictimcomplain($_SESSION['victim_id']); 

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
                <td><?php echo $value['violence_type']?></td>
                <td><?php echo $value['message']?></td>
                <td><?php echo $value['complaint_status']?></td>

<!-- 
                 <td><?php echo $value['feedback']?>

                    <h6>Hello</h6>
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