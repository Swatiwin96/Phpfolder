<?php

 include 'conn1.php';

 if(isset($_POST['submit'])){

 $id = $_GET['id'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $q = " update form set id=$id, username='$username', password='$password' where id=$id  ";

 $query = mysqli_query($con,$q);

 header('location:display1.php');
 }

?>
<!doctype html>
<html>
  <body>
    <div>
    <center>
      <form action="" method="post">
    <h1>update OPERATION</h1>

    <label>USERNAME</label>
    <input type="text" name="username"><br><br>

      <label>PASSWORD</label>
      <input type="password" name="password"><br><br>
      <input type="submit" name ="submit">
    </center>
  </form>
  </body>
  </html>
