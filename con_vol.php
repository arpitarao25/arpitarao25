<?php
$name = $_POST['name'];
$email= $_POST['email'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into volunteer(name, email) values(?,?)");
   $stmt->bind_param("ss",$name, $email);
   $stmt->execute();
   echo "registration successfull.......";
   $stmt->close();
   $conn->close();
}
?>
