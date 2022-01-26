<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"mydb");
$id = $_GET['id'];

  $q="DELETE FROM `form`  where id=$id";
  mysqli_query($con,$q);
?>
