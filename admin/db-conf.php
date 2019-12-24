<?php 
$con = mysqli_connect('localhost','root','','music');
session_start();
?>
<?php
//blog someone else to use your admin panel
if ($_SESSION['user'] != 1) {
	header("location: ../login.php");
}

$id_loginuser = $_SESSION['user'];
$sql = "SELECT * from user where id='$id_loginuser'";
$result = mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result))
{
$id_login = $row['id']; 
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$address = $row['address'];
$language = $row['language'];
$avatar = $row['avatar'];
$priv = $row['privilege'];
}
                
?>
