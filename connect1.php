<?php
$f_name = $_POST['f_name'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin_code= $_POST['pin_code'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into donation(f_name, email, addr, city, state,pin_code) values(?,?,?,?,?,?)");
   $stmt->bind_param("sssssi",$f_name, $email, $addr, $city, $state, $pin_code);
   $stmt->execute();
   echo "REGISTRATION SUCCESFULL!!<br><br>THANK YOU<3";
   $stmt->close();
   $conn->close();
}
?>