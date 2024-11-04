<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sahayog_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
//function to pass parameters and delete 
function del_columns($id ) {
  global $conn;
  $flg=0;
  $qry="delete from register where id=$id";
  $result=mysqli_query($conn,$qry);
  
  if($result){
    
  }else{
      echo"ERROR!!";
  }
}
?>
<?php
//function to fetch form data and pass it to del function
$id=$_GET['id'];

  del_columns($id);

?>
<?php
$redirect="http://localhost/SAHYOG%20WEB/dashboard.php";
header("location:$redirect");

?>

