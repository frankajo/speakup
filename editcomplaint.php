<?php include_once("header.php"); 
      include_once "speak/complaint.php";
      $compobj = new Complaint();


      // fetch existing data
      $data = $compobj->getComplaint($_REQUEST['$complaintid']);


      echo "<pre>";
      print_r($data);
      echo "</pre>";

      // check if the button is clicked
          if(isset($_POST['btneditcomplaint'])){
      // validate
          if(empty($_POST['victimid'])){
          $errors['victimid'] = "Victimid cannot be empty!";
          }

          if(empty($_POST['violenceid'])){
            $errors['violenceid'] = "violenceid cannot be empty!";
            }

            if(empty($_POST['message'])){
              $errors['message'] = "message cannot be empty!";
              }

      // sanitize
        // $clubname = sanitizeInput($_POST['clubname']);
        // $description = sanitizeInput($_POST['description']);
        // $slogan = sanitizeInput($_POST['slogan']);
        $year = $_POST['victimid'];
        $country = $_POST['violenceid'];
        $clubid = $_POST['message'];


      // update record
      

      // reference insertcomplaint
      $output = $compobj->updateComplaint($victimid, $violenceid, $message);

      // check if it's successful
      if ($output == true) {
          $msg = "Complaint was successfully added";
          // redirect to listcomplaint
          header("Location: listcomplaint.php?m=$msg");

        }elseif ($output == 0){
          $msg = "No Changes was made!";
            header("Location: listcomplaint.php?m=$msg");
        }else{
          $errors[] = "Oops! Could not add complaint. ".$output;
       }


     }
 ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">
      <small>Edit Complaint</small>
    </h1>
 
    <div class="row">
      <div class="col-lg-8 mb-4">
          <?php 
            if (!empty($errors)){
                echo "<ul class='alert alert-danger'>";
                foreach($errors as $key => $value){
                  echo "<li>$value</li>";
                }
                echo "</ul>";
            }
          ?>
        <form name="addcomplaint" id="addcomplaint" action="editcomplaint.php?complaintid=<?php if(isset($_REQUEST['complaintid'])){
          echo $_REQUEST['complaintid'];
        }?>" method="post" enctype="multipart/form-data">

          <div class="control-group form-group">
            <div class="controls">

              <label>Victim ID:</label>
              <input type="text" class="form-control" id="victimid" name='victimid' value="<?php if(isset($data['victim_id'])){ echo $data['victim_id']; }?>">
              <?php 
                  if(!empty($errors['victimid'])){
                    echo "<div class='text-danger'>".$errors['victimid']."</div>";
                  }
              ?>   
            </div>
          </div>

          
          <div class="control-group form-group">
            <div class="controls">
              <label>Violence ID:</label>
              <input type="text" class="form-control" id="violenceid" name='violenceid' value="<?php if(isset($data['violenceid'])){ echo $data['violenceid']; }?>">

            </div>
          </div>


          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="5" cols="50" name='message' class="form-control" id="message"  maxlength="300" style="resize:none"><?php if(isset($data['club_desc'])){ echo $data['club_desc']; }?></textarea>
            </div>
                <?php 
                  if(!empty($errors['message'])){
                    echo "<div class='text-danger'>".$errors['message']."</div>";
                  }
              ?>
          </div>

          <input type="hidden" name="complaintid" value="<?php if(isset($data['complaint_id'])){
            echo $data['complaint_id'];
          }?>">
          <br>
          <input type="submit" class="btn btn-primary" id="btneditcomplaint" name="btneditcomplaint" value="Update Complaint" />
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

   <?php include_once("logfooter.php"); ?>