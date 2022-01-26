<!Doctype html>
<html>
<head>
</head>
<body>
  <h1>DISPALY DATA</h1>
  <center>

  <table border=1>
    <tr>
    <th>ID</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th>DELETE</th>
    <th>UPDATE</th>
  </tr>


<?php
include 'conn1.php';
$q = "select * from form ";

$query = mysqli_query($con,$q);

while($res = mysqli_fetch_array($query)){

 ?>
 <tr>
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <button><a href="delete1.php?id=<?php echo $res['id']; ?>" > Delete </a></button> </td><!--value id mai vlue mil jyegi-->
 <td> <button><a href="update1.php?id=<?php echo $res['id']; ?>"> Update </a></button></td>

 </tr>

 <?php
 }
  ?>


</table>
</center>

<script type="text/javascript">

$(document).ready(function(){
$('#tabledata').DataTable();
})

</script>
</body>
</html>
