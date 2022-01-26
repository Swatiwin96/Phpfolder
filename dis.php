<!DOCTYPE HTML>
<html>
<body>
  <table border="1">
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>password</th>
  </tr>

</body>
<?php
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"mydb");
$q="select * from form";
$query=mysqli_query($con,$q);
while($row=mysqli_fetch_array($query)){
  ?>

  <tr>
  <td> <?php echo $row['id']; ?> </td>
  <td> <?php echo $row['username']; ?></td>
  <td> <?php echo $row['password']; ?> </td>
  <td> <button><a href="del.php?id=<?php echo $row['id']; ?>" > Delete </a></button> </td><!--value id mai vlue mil jyegi-->
  <td> <button><a href="upd.php?id=<?php echo $row['id']; ?>"> Update </a></button></td>


  </tr>




<?php
}
?>
