<?php
session_start();

// initializing variables'

$name=$_POST['name'];
$company=$_POST['company'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];




// connect to the database
$con =new mysqli('localhost','root','','sign_up');
if(!$con){
	die('Connection Error'.mysqli_error());
}
  

    $query = "INSERT INTO creed (username,password) VALUES('$name','$company','$email','$password','$phone')";
    $exe_check=mysqli_query($con, $query);
    if($exe_check){
      echo "register successfull";
    }else{
      echo "please try again";
    }
    
  
  ?>