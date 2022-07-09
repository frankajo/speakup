

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/fontawesome/css/all.css">
		<script type="text/javascript" src="jquery.min.js"></script>

	<style type="text/css">
		*{
			margin:0;
			padding:0;
		}

		body{
			background-image: url(images/lib2.jpg);
			background-position: center;
			background-size: cover;
			font-family: sans-serif;
			margin-top: 40px;
			}

		.complain{
			width: 54%;
			background-color: rgba(0, 0, 0, 6);
			margin: auto;
			color: #ffffff;
			padding: 10px 0px 10px 0px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
			}

		.main{
			background-color: rgba(0, 0, 0, .6);
			width: 805px;
			margin: auto;
			}
		form{
			padding: 10px;
			height: 600px;
			}
		#name{
			width: 100%;
			height: 100px;
			}

		.name{
			margin-left: 25px;
			margin-top: 30px;
			width: 125px;
			color: white;
			font-style: 18px;
			font-weight: 700;
			}
		.firstname{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			border-radius: 6px;
			padding: 0 24px;
			font-size: 16px;
			color: black;
			}
		.lastname{
			position: relative;
			left: 470px;
			top: -105px;
			line-height: 40px;
			border-radius: 6px;
			padding: 0 24px;
			font-size: 16px;
			color: black;
			}

		.firtlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 15px;
			left: 200px;
			top: -33px;
			}
		.lastlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capital
			ize;
			font-size: 15px;
			left: 475px;
			top: -100px;
			}

		.number{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			width: 528px;
			font-size: 15px;			
			padding: 0 22px;
			border-radius: 6px;
			color: black;
			}
		.option{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			height: 40px;
			width: 528px;
			font-size: 15px;			
			padding: 0 22px;
			border-radius: 6px;
			color: black;
			outline: none;
			overflow: hidden;
			}
		.option option{
			font-size: 15px;
			}
		.message{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			height: 40px;
			width: 528px;
			font-size: 15px;			
			padding: 0 22px;
			border-radius: 6px;
			color: black;
			}
		button{
			position: relative;
			background-color: rgba(0, 0, 0, .5);
			display: block;
			margin: 20px 0px 0px 20px;
			text-align: center;
			border-radius: 12px;
			border: 2px solid #366473;
			padding: 14px 110px;
			color: white;
			left: 180px;
			top: -35px;
			}
		
	</style>

	
</head>
<body>

<div class="complain"><h2>Lodge Complain</h2></div>
		
		<div class="main">
	
		<div class="col-md-3 " style="border-right: 1px solid #808080">
				
			</div>
				

		<form method="post" action="">
			<div id="name">
			<h3 class="name">Name:</h3>
			<input type="text" name="firstname" class="firstname"><br>
			<label class="firtlabel">First name</label><br>
			<input type="text" name="lastname" class="lastname"><br>
			<label class="lastlabel">Last name</label>
			</div>

			<h3 class="name">Phone:</h3>		
			<input type="text" name="phone" class="number">

			<h3 class="name">Violence:</h3>
			<select class="option" name="violence">
				<option disabled="disabled" selected="selected">--Please select--</option>
					
	 					<option>Sexual harrassment</option>
	 					<option>Bullying</option>
	 					<option>Intimidation</option>
	 					<option>Physical asault</option>
	 					<option>Rape</option>
	 					<option>Neglect</option>
	 					<option>Others</option>
			</select>

			
			  <h3 class="name">Complain Detail:</h3>
			<textarea class="message" placeholder="message" name="message"></textarea>
        	<label></label>
       		
        	

        	<button type="submit">Submit</button>

		</form>

	</div>


</body>
</html>