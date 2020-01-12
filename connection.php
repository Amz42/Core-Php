<?php

$server_name="localhost";
$username="root";
$password="";
$dbname="project1";

$conn= mysqli_connect($server_name,$username,$password,$dbname);
if($conn){
	//   Connected
	//echo "connected to db";
}
else{
	//   Not Connected
	die("Connection failed because ".mysqli_connect_error());
}
?>