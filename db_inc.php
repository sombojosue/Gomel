<!-- Database connection with Php -->
<?php
//Database connectivity in mysql 
$con = mysqli_connect('localhost','root','','gomel_db');
if(!$con){
header('location:error.php');
}
?>