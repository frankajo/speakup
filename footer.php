<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
   
<!------------------------ font awesome -------------------------------------------------------------->
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<!------------------------ The Box Icons -------------------------------------------------------------->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<meta name="description" content="Report all domestic violence around you">
	<meta name="keyword" content="Say no to domestic violence">
	<meta name="Author" content="Ajo Frank N">
       
<!------------------------ The Bootstrap link ---------------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!------------------------ The css animation ------------------------------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<title>Footer</title>

	<!-- The Footer styling Starts Here -->
		<style>



			#containerFooter{
				display: flex; align-item: center; justify-content: center;
				background: rgba(0, 0, 0, 0.6); 
			}

			.row-foot{display: flex; flex-wrap: wrap;}
			.footer-col{width: 25%; padding: 0 20px;}

			 h4{font-size: 20px; color: #fff; text-transform: capitalize; font-weight: 500px; position: relative;
				margin-bottom: 30px; align-items: center; justify-content: center;}
			 h4::before{content: ''; position: absolute; left: 0; bottom: -10px; background-color: #e19c30; height: 2px;
				box-sizing: border-box; width: 60px;}

			#quickLink a{color: #fff; text-decoration:none; font-size: 17px; 
			display: flex;
			}
			#quickLink a:hover{color: #fff; cursor: pointer; padding-left: 8px;}
			#quickLink:hover a{color: #fff; cursor: pointer;}

			#socialMedia a{display: inline-block; height: 40px; width: 40px; background-color: rgba(255, 255, 255, 0.2);
				text-align: center; line-height: 40px; border-radius: 50%; color: #fff; transition: all 0.5s ease;}
				#socialMedia a:hover{color: #fff; background-color: #e19c30;}

			#bottom-footer{text-align: center; padding: 20px; background:rgba(0,0,0,0.8); color: #fff;}
		</style>

</head>
<body>


	<div class="container" id="containerFooter">
	<!-- The div Container Starts here -->
		<div class="row">

		
		<div class="col-md-4 mt-3" id="statement">
		<h4 >SpeakUp</h4>
                    <ul>
                        <p style="color: white;">
                            With a passion and drive to create
                            a lasting society where domestic
                            violence no longer exist and victims
                            of domestict violence are cared for...
                        </p>
                    </ul>
		</div>

		<div class="col-md-2 mt-3" id="socialMedia"></div>
		
		<div class="col-md-3 mt-3" id="quickLink">
		<h4>Quick Link</h4>
                    <a href="#">About Us</a>
                    <a href="#">Service</a>
                    <a href="#">Get Involve</a>
                    <a href="#">Get Help</a>
		</div>


		<div class="col-md-3 mt-3" id="socialMedia">
			<h4>Follow Us</h4>
			<a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
		</div>
			
		<div class="col-md-12" id="bottom-footer">
    		<p><i>@2022 by FrankSolution / Terms of Use / Privacy Policy...</i></p>
		</div>
		</div>
	<!-- The div Container Starts here -->
	</div>
	
</body>
</html>