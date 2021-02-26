<?php

include_once 'dbh.php';


$district=$_POST['district'];
$area=$_POST['area'];
$type=$_POST['type'];
$price=$_POST['price'];
$furnitured=$_POST['furnitured'];
$tenants_preferred=$_POST['tanants'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$data="INSERT INTO details(district,area,type,price range,furnitured,tenants prefered,address,phone no) VALUES ('$district','$area','$type','$price','$furnitured','$tenants_preferred','$address','$phone');";
$query=mysqli_query($conn,$data);


if($query)
{
    echo '<script type="text/javascripy"> alert("data saved")</script>';
}
else
{
    echo '<script type="text/javascripy"> alert("data not saved")</script>';
}



?>
