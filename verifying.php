 <?php include_once("nav_admin.php");?>

<div class="container">
    
    <h4>Verifying Complaint</h4>


    <?php

    if (isset($_REQUEST['btnverify'])) { 


       include_once('speak/complaint.php');

       $obj = new Complaint();

       $output = $obj->updateComplaint($_REQUEST['complaintid']);
    }


    ?>
 
    <?php

    if (isset($_REQUEST['btncancel'])) {

        header("Location: listcomplaint.php");
        exit();
    }

    ?>




<div class="row">
    
    <div class="col-lg-8 mb-4">
        
        <?php

        if (isset($_REQUEST['complaintid'])) { 
        // code...

        ?>

            <div class="alert alert-success">
                <h3>Verify <?php echo $_REQUEST['firstname'];?>'s complaint</h3>
            </div>

            <form enctype="multipart/form-data" action="verifying.php?complaintid=<?php echo $_REQUEST['complaintid']?>&firstname=<?php echo $_REQUEST['firstname']?>&lastname=<?php echo $_REQUEST['lastname']?>" method="POST">
                

                <button type="submit" name="btnverify" class="btn btn-success">Yes</button>
                <button type="submit" name="btncancel" class="btn btn-danger">No</button>
            </form>

        <?php } ?>
    </div>
</div>

</div>


   <?php include_once("logfooter.php"); ?>