<?php
include("connection.php");
//error_reporting(0);

if($_POST['submit_signup']){
	
	$user_name= $_POST['name'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	
	/*
	$folder="images/";
	$image=$_POST['user_image'];
	echo $image;

	print_r($_FILES['user_image']);
	*/


	if($user_name!="" && $email!="" && $password!=""){
		$query="INSERT INTO people VALUES('$email','$user_name',md5('$password'))";
		$data=mysqli_query($conn,$query);			 // query result
		if ($data){
			
			

			header('location:index.php');
			//echo "<script>alert('You are signed up succesfully...');</script>";
		}
		else{
			echo "<p id='data-insert-error'>Error signing up</p>";
		}
	}

}
?>
<style type="text/css">
	#data-insert-msg{
		font-size: 26pt; color: green;
	}
	#data-insert-error{
		font-size: 26pt; color: red;
	}
</style>