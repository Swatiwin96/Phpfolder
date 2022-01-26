<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"mydb");

$id = $_GET['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$q = " update form set id=$id, username='$username', password='$password' where id=$id  ";
mysqli_query($con,$q);

?>
