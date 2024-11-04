<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sahayog_db";

//database connection
$con = mysqli_connect("$host","$username","$password","$database");

//check connection
if(!$con)
{
   header("Location: db.php");
   die();
}
else
{
   echo"database connected";
}
?>