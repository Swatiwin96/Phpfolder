<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <form action="" method="post">
    USERNAME:<input type="text" name="username">
    PASSWORD:<input type="password" name="password">
  <input type="submit" name="submit">
</body>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"mydb");

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

$query="INSERT INTO `form` (`username`,`password`)values('$username','$password')";
$q=mysqli_query($con,$query);
}
 ?>
