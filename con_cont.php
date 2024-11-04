<?php
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$city = $_POST['city'];
$feed = $_POST['feed'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into contact(f_name,l_name,city,feed) values(?,?,?,?)");
   $stmt->bind_param("ssss",$f_name, $l_name, $city, $feed);
   $stmt->execute();
   echo "information submitted successfull.......";
   $stmt->close();
   $conn->close();
}
?>