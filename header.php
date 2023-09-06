<!DOCTYPE html>

<html lang="en">



<head>

<title></title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">


	<style>


/* =============================The Header Section ==========================================================*/
	/* position: sticky;
		top:5px;
		z-index: 1; */ 
		header{  width: 100%; background-color: rgba(0, 0, 0, 0.7); 
		padding: 15px; margin-top: 10px; z-index: 1; visibility: visible; border-radius: 6px;}
		.nav{align-items: center;  padding: 1px 0; justify-content: space-between; }
		.main{margin: auto; width: 100%; }
		.main a{text-decoration:none;}


		/* ---The Logo-- */
		#logo{font-size: 30px; font-weight: 600; letter-spacing: 1px; color: white; font-variant: small-caps;}
		#logo span{color: #e19c30;}

		/* ---The Donation Button-- */
		#Dbutton{font-size: 25px; font-size: 500; color: white; background-color: #e19c30; border-radius: 30px;
		padding: 3px 7px;}
		#Dbutton:hover{color: white; transform: scale(1.1);}

		button{
				background-color:#e19c30;
				border-radius: 30px;
				padding: 10px;
			}

		/* ---The navigation-- */
		.navbar{color: white; font-size: 20px; font-weight: 400; letter-spacing: 1px;}
		.navbar:hover{background: var(--main-color); border-radius: 10px; color: white; transform: scale(1.1);}

		@media screen and (max-width: 1000px){
			header{
				width: 98%;
			}
		}

		

	</style>

</head>



<body>



<div class="container mt-4">
<!-- Opening of div container -->




<!------------------------ The header start here --------------------------->
<header>

<div class="nav main">
<a href="home.php" id="logo" class="navbar-brand animate__animated animate__bounce animate__slower
animate__infinite">Speak<span>Up</span></a>

<a href="about.php" class="navbar">About Us</a>
<a href="services.php" class="navbar">Services</a>
<a href="supportus.php" class="navbar">Get Involve</a>
<a href="signup.php" class="navbar">Get Help</a>
<a href="login_victim.php" class="navbar">Login</a>

<button type="button" name="button" id="Dbutton"  style="margin-left:30px">
<a href="donation.php" style="text-decoration:none; color:white;">Donate Now</a>
</button>
</div>

</header>
<!------------------------ The header ends here --------------------------->
							



<!--losing of div container -->
</div>






<!--JS File-->
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>

</body>
</html>