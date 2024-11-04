<?php
$f_name = $_POST['f_name'];
$age = $_POST['age'];
$p_no = $_POST['p_no'];
$email = $_POST['email'];
$psd= $_POST['psd'];
$re_psd= $_POST['re_psd'];

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
else
{
   $stmt= $conn->prepare("insert into register(f_name, age, p_no, email, psd, re_psd) values(?,?,?,?,?,?)");
   $stmt->bind_param("siisss", $f_name, $age, $p_no, $email, $psd, $re_psd);
   $stmt->execute();
   echo "registration successfull.......";
   $stmt->close();
   $conn->close();
}
?>
