<?php
		include("connection.php");
		
		//error_reporting(0);
		if($_POST['update_info']){
			$updated_name=$_POST['update_name'];
			$updated_pwd=$_POST['update_password'];
			$updated_pwd_retype=$_POST['update_password_retype'];
			$email=$_POST['login_email_up'];
			$old_password=$_POST['old_password'];

			$query_pswd="SELECT password FROM people WHERE email='$email'";   /// to fetch the older password from DB
			$query_result=mysqli_query($conn,$query_pswd);				  	  /// to fetch the older password from DB
			$data=mysqli_fetch_assoc($query_result);						  /// to fetch the older password from DB

			if(strncmp($data['password'],md5($old_password),10)==0){     	 /// to compare user entered old password with the older password from DB
				if($updated_pwd==$updated_pwd_retype){									
					$update_query="UPDATE people SET name='$updated_name',password=md5('$updated_pwd') WHERE email='$email'";
					$query_result=mysqli_query($conn,$update_query);
					if($query_result){
						echo "Update Successful !!!";
						//header("Location: login.php");
						//exit;
					}
					else{
						echo "Update Failed !,Please go back to profile page & try again...";
					}
				}
				else{
					echo "New Password not match in both columns,Please go back to profile page & try again...";
				}
			}
			else{  															  /// if old password doesn't match do this
				echo "<script>alert('Wrong old Password, Please go back to profile page & try again...');</script>";
			}
		}

?>