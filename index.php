<?php
include("connection.php");
//include("signup.php");
//error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/668dd02108.js"></script>
	<link rel="stylesheet" type="text/css" href="loader.css">

	<style type="text/css">
		body {
			background-color: royalblue;
			margin: 0;
			padding: 0;
			background-image: url("http://getwallpapers.com/wallpaper/full/d/b/7/359222.jpg");
			background-size: 100% 150%;
		}
		#main-container{
			background: linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.5));
			border: 4px solid white;
			border-radius: 25px;
			margin-top: 200px;
		}
		td{
			padding-left: 25px;
			padding-right: 25px;
			padding-top:5px;
			padding-bottom: 5px; 
		}
		#login-table{
			background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
			width: 280px;
		}
		#login-table input{
			background-color: transparent;
			border-color: transparent;
			border-bottom:1px solid blue;
			outline-color: transparent;
		}
		#login-btn{
			background-color: blue;
			color: white;
			border:1px solid white;
			border-bottom: transparent;
		}
		#eye-btn{
			color: white;
			background-color: transparent;
			border:1px solid transparent;
			border-bottom: 1px solid blue;
			outline-color: transparent;
		}
		#login-password{
			width: 157px;
		}
		input{
			outline-color:transparent;
		}
	</style>
</head>

<body>

	
	<div class="container-fluid">
		<!--Row 1-->
		<div class="row">
			
			<div class="col-lg-3"></div>
			
			<div class="col-lg-6" id="main-container" style="padding-bottom: 20px">
				<h1 align="center" style="font-weight: bold; font-family: 'Cinzel Decorative', cursive;"><u>ABC Company</u></h1>
				<br><br>
				<!--  SIGN IN FORM  -->
				<form id="sign-in-form" method="post" action="logincode.php">
					<table align="center" id="login-table">
						<tr><td style="font-size: 16pt; padding-left: 15px;padding-right: 0; color: blue">Sign In</td></tr>
						
						<tr align="center"><td style="font-size: 12pt; color: white;"><input type="text" name="login_email" placeholder="Username..." required=""/></td></tr>
						<tr align="center"><td style="font-size: 12pt; color: white; width:100px;"><input type="password" name="login_password" placeholder="password" id="login-password" required="" />	<button id="eye-btn" type="button"><i class="fas fa-eye"></i></button>	</td></tr>
						
						<tr align="center"><td><input type="submit" name="login_submit" value="Log In" id="login-btn"></td></tr>
						<tr><td><hr style="border:0.5px solid blue; padding-left:0; margin-top: 0.5px;margin-bottom: 0.5px;"></td></tr>
						<tr align="center"><td><button type="button" data-toggle="modal" data-target="#sign-up" style="background-color: transparent; border-color: transparent; outline: none; margin-bottom: 5px; color: white">Sign Up ?</button></td></tr>
					</table>
				</form>
			</div>
			
			<div class="col-lg-3"></div>
		
		</div>
		
	</div>

	<!--  SIGN UP FORM  -->
	<div id="sign-up" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header"><h1 class="modal-title" align="center" style="font-variant: small-caps;">SIGN UP</h1></div>
               <div class="modal-body">
               		<form id="sign-up-form" method="post" action="signup.php">
               			<table align="center">
						    
							<tr><td><label>Name</label></td>	<td><input type="text" name="name" placeholder="Aman Gupta" required=""></td></tr>
               				<tr><td><label>Email ID</label></td>	<td><input type="Email" name="email" placeholder="abc@gmail.com" required=""></td></tr>
               				<tr><td><label>Password</label></td>	<td><input type="password" name="password" minlength='8' required="" ></td>	</tr>
							
							
							<!--		<tr align="center">	<td><b>Profile Image:</b></td>	<td><input type="file" name="user_image" required=""/></td>	</tr>		-->
               				
							   
							<tr align="center"><td colspan="2"><input type="submit" name="submit_signup" value="submit"></td></tr>
               			</table>
               		</form>
               </div>
            </div>
        </div>
    </div>


	<!--LOADER-->
	<div id="loader">
     	<span id="l">L</span>
     	<span id="o">O</span>
     	<span id="a">A</span>
     	<span id="d">D</span>
     	<span id="i">I</span>
     	<span id="n">N</span>
     	<span id="g">G</span>
     	<span id="d1">.</span>
     	<span id="d2">.</span>
     	<span id="d3">.</span>
    </div>

	<script type="text/javascript" src="script.js"></script>	
	</body>

</html>

