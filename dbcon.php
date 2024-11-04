<?php

//database connection
$conn= new mysqli('localhost','root','','sahayog_db');
if($conn->connect_error)
{
   die('Connection Failed: '.$conn->connect_error);
}
?>