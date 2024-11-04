<?php
$usr_nm = $_POST['usr_nm'];
$pwd = $_POST['pwd'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into login(usr_nm, pwd) values(?,?)");
   $stmt->bind_param("ss",$usr_nm, $pwd);
   $stmt->execute();
   echo "registration successfull.......";
   $stmt->close();
   $conn->close();
}
?>
