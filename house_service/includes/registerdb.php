<?php

include_once 'dbh.php';

$user_name=$_POST['user_name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$sex=$_POST['sex'];
$ph=$_POST['ph'];




$sql="INSERT INTO register(user_name,email,password,confirm_password,gender,phone) VALUES ('$user_name','$email','$pass','$pass1','$sex','$ph');";
mysqli_query($conn,$sql);


if($pass==$pass1)
{
    
    echo 'success';
    header("Location: ../index.php?signup=success");
}
else
{
    echo 'password does not match! Retry';
   
    
}

?>

