<?php
$name = $_POST['name'];
$age = $_POST[age'];
$gender = $_POST['gender'];
$help = $_POST['help'];
$addr = $_POST['addr'];
$state= $_POST['state'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into help(name,age,gender,help,addr,state) values(?,?,?,?,?,?)");
   $stmt->bind_param("sssss",$name, $age, $gender, $help, $addr, $state);
   $stmt->execute();
   echo "registration successfull.......";
   $stmt->close();
   $conn->close();
}
?>