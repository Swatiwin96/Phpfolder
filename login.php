<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
</head>
<body>
  <center>
  <form action="" method="post">
EMAIL:  <input type ="email" name="email" required><br
<br>
   PASSWORD:<input type ="password" name="password" required><br>
   <input type="submit" name="submit">
 </form>
 <?php
 if(isset($_POST["submit"])){
   $connection=mysqli_connect("localhost","root","");
   $db=mysqli_select_db($connection,"testing");

   $query="select *from logins where email='$_POST[email]' ";
   $query_run=mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($query_run)){


     if($row['email']==$_POST['email']){
       if($row['password']==$_POST['password']){
       header("Location:admin_dashboard.php");
     }
     else{?>
       <span>wrong password!!</!!span>
       <?php
     }
   }

 }
}
?>
</center>
</body>
</html>
