<?php
    include("connection.php");
    session_start();


    $email=$_SESSION['email'];
    $query="DELETE FROM people WHERE email='$email'";
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('Account Deleted successfully...');</script>";
        session_unset();
        header('location:index.php');

    }
    else{
        echo "Account Can not be Deleted...";
    }
    
?>