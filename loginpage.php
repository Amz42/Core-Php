<?php 
	include("connection.php");
	error_reporting(0);
	session_start();
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
	<link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/668dd02108.js"></script>



	<style type="text/css">
		body{
			margin:0; padding: 0;
			background:url("cat.jpg");
			background-size: 100vw 100vh;
		}
		.greeting{
			font-family: 'Philosopher', sans-serif;
			font-size: 25pt;
		}
		.error-msg{color:red; font-size: 25pt;}
		button{ outline:none; outline-color: transparent;	}
		#update_form_div{
			border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top:4px solid black; 
			background-color: white; 
		}
		#email_update{ font-size: 16pt; }
		#update_table{ background-color: lightblue; }
		#update_table input{
			width: 120px;
		}
		td{ font-size: 12pt; }
		#up_email_box{
			min-width:250px; font-size: 12pt; background-color: transparent; border-color: transparent;
			font-weight: bold;
		}
		.eye{
			background-color: transparent; border:1px solid transparent;
		}
		#update_name,#update_password,#update_password_retype,#old_password{
			background-color: transparent; border-color: transparent; border-bottom:1px solid black; outline-color: transparent;
		}
	</style>
</head>

<body>

	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				
				<?php	
					if(!isset($_SESSION['user_name'])){
						header('location:index.php');
					}
					echo "<p class='greeting'>Hi ".$_SESSION['user_name']." !!!</p>";	///    DISPLAY USER NAME........
				?>

			</div>
			
			<div class="col-lg-3">
				<div style="display:inline;">
					<a href="delete.php" onclick='return confirm("Are you sure you want to delete your account???");'><button class="btn btn-warning">DELETE Account</button></a>
					<a href="logout.php" onclick='return confirm("Are you sure you want to Logout ?");'><button class="btn btn-info" style="margin-left:45px;">Logout</button></a>
				</div>	
			</div>

			<div class="col-lg-4">
				<div id="data_update" align="center">
					<button data-toggle="collapse" data-target="#update_form_div" class="btn btn-info"> Update Profile Info </button><br><br>
					<div class="collapse" id="update_form_div" align="center">
						<form action="update.php" method="post">   <!--////////////////////    UPDATE FORM     //////////////////////-->
							<div class="table-responsive">
								<table class="table table-striped" id="update_table">
									<tr>
										<td colspan="3">
											<label id="email_update">UserID:</label>
											<i><input type="email" name="login_email_up" value="<?php echo $_SESSION['email'];?>" id="up_email_box"></i>
										</td>
									</tr>
									<tr>
										<td><label><b>User Name</b></label></td>
										<td><input type="text" name="update_name" id="update_name" value="<?php echo $_SESSION['user_name'];?>"></td>
										<td></td>
									</tr>
									<tr>
										<td><label><b>Old Password</b></label></td>
										<td><input type="password" name="old_password" id="old_password"></td>
										<td><button class="eye" id="eye-btn3" type="button" onclick="eyeblink('old_password','eye-btn3')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td><label><b>New Password</b></label></td>
										<td><input type="password" name="update_password" id="update_password" ></td>
										<td><button class="eye" id="eye-btn" type="button" onclick="eyeblink('update_password','eye-btn')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td><label><b>Retype new Password</b></label></td>
										<td><input type="password" name="update_password_retype" id="update_password_retype" ></td>
										<td><button class="eye" id="eye-btn2" type="button" onclick="eyeblink('update_password_retype','eye-btn2')"><i class="fas fa-eye"></i></button></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="submit" name="update_info" value="Update Info"></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><b>Enter updated info & press Update button</b></td>
									</tr>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	



	<script type="text/javascript">
		function eyeblink(id_input,button_id){
			let status=document.getElementById(id_input).type;
			if(status=="password"){ 
				document.getElementById(id_input).type="text"; 
				document.getElementById(button_id).innerHTML="<i class='fas fa-eye-slash'></i>"; 
				setTimeout(()=>{
					document.getElementById(id_input).type="password";
					document.getElementById(button_id).innerHTML="<i class='fas fa-eye'></i>"; 
				},500);
			}
		}
	</script>


</body>
</html>