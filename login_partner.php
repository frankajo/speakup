  <?php 
    session_start();
 

   include_once("header.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    // include class file
    include_once("speak/admin.php");

    // create object of admin class
    $ptobj = new Partner();

    // make reference to login function
    $login = $ptobj->login($_POST['username'], $_POST['pwd']);

    // echo "$login";

      if ($login == false){
          $error = "<div class='alert alert-danger'>Invalid Username or Password</div>";
      }else{
        // login successfully, then redirect to dashboard
        header("Location: dashboard_partner.php");
        exit();

      }
    }

?>

<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 text-center">Partner
      <small>Login</small>
    </h1>

    <?php 
      if (isset($error)){
        echo $error;
      }

      if (isset($_GET['m'])){
      echo "<div class='alert alert-danger'>".$_GET['m']."</div>";
      ?>

      <script type="text/javascript">
        alert('<?php echo $_GET['m'] ?>');
      </script>
      <?php 
     }
    ?>
    

    <div class="row" style='min-height:400px;'>
      <div class="col-lg-8 col-md-8  offset-md-2 offset-lg-2 col-sm-12">
          <form action="" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name='username' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div><hr>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name='pwd' class="form-control" id="exampleInputPassword1">
                </div><br><br>
                
                <button type="submit" class="btn btn-info btn-block">Login</button>
        </form>
      </div>
    
     
      
     
      
    </div>
  </div>

  <?php 
    include_once("footer.php");
?>