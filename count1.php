<?php


$servername="localhost:3306";

$uname="root";

$pass="";

$db="sahayog_db";


$conn=mysqli_connect($servername,$uname,$pass,$db);


if(!$conn)
{

    die("Connection Failed");

}


$sql = "SELECT * FROM donation";
$query = $conn->query($sql);

echo "$query->num_rows";
?>