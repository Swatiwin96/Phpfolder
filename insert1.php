<?php

include 'conn1.php';

if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

  $q="INSERT INTO `form` (`username` ,`password`) values('$username','$password')";
  $query=mysqli_query($con,$q);
  header('location:display1.php');
}
?>
<!Doctype html>
<html>
<head>
  <title></title>
</head>
<body>
  <div>
  <center>
    <form action="" method="post">
  <h1>INSERT OPERATION</h1>

  <label>USERNAME</label>
  <input type="text" name="username"><br><br>

    <label>PASSWORD</label>
    <input type="password" name="password"><br><br>
    <input type="submit" name ="submit">
  </center>
</form>
</div>
