 <?php include_once("nav_admin.php");?>

<div class="container">
    
    <h4>Activate Testimony</h4>


    <?php

    if (isset($_REQUEST['btnactive'])) { 


       include_once('speak/testimonial.php');

       $obj = new Testimonial();

       $output = $obj->updateTestimonial($_REQUEST['testimonialid']);
    }


    ?>
 
    <?php

    if (isset($_REQUEST['btncancel'])) {

        header("Location: list_testimony.php");
        exit();
    }

    ?>




<div class="row">
    
    <div class="col-lg-8 mb-4">
        
        <?php

        if (isset($_REQUEST['testimonialid'])) { 
        // code...

        ?>

            <div class="alert alert-success">
                <h3>Activating <?php echo $_REQUEST['firstname'];?>'s Testimony</h3>
            </div>

            <form enctype="multipart/form-data" action="active.php?testimonialid=<?php echo $_REQUEST['testimonialid']?>&firstname=<?php echo $_REQUEST['firstname']?>&lastname=<?php echo $_REQUEST['lastname']?>" method="POST">

                <button type="submit" name="btnactive" class="btn btn-success">Yes</button>
                <button type="submit" name="btncancel" class="btn btn-danger">No</button>
            </form>

        <?php } ?>
    </div>
</div>

</div>


   <?php include_once("logfooter.php"); ?>