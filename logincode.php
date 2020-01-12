<?php		// ALL Login Code is here...
    include("connection.php");
    error_reporting(0);
    session_start();

    if($_POST['login_submit']){
        $user_email=$_POST['login_email'];
        $password=$_POST['login_password'];
        $password=md5($password); 
            // NOW CUT PASSWORD TO THE LENGTH 10 TO CHECK IT AS STORED IN DATABASE IS MAX 10 CHARACTERS....
        $query="SELECT * FROM people where email='$user_email'";
        $query_result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($query_result);


        if(!strncmp($data['password'],$password,10) && $data['email']==$user_email){
            //echo "<p class='greeting'>Hi ".$_SESSION['user_name']." !!!</p>";
            $_SESSION['email']=$data['email'];
            $_SESSION['user_name']=$data['name'];
            header('location:loginpage.php');
        }
        else if($data['password']!=$password && $data['email']==$user_email){
            echo "<p class='greeting'>Invalid UserID or Password</p>"; //troubleshooting
            session_unset();
        }
        else{
            echo "<p class='error-msg'>No Record Found with UserID '$user_email'</p>";
            session_unset();
        }
    }
    else{
        session_unset();
        header('location:index.php');
    }
?>