<?php


$conn = "";


try
{

	$servername = "localhost:3306";

	$dbname = "sahayog_db";

	$username = "root";

	$password = "";

	
        $conn = new PDO(
"mysql:host=$servername; dbname=sahayog_db1",$username, $password
);

	
$conn->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $e)
{

	echo "Connection failed: " . $e->getMessage();

}


?>