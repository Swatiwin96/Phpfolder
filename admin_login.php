<!DOCTYPE html>
<html>
<head>
  <title>ADMIN LOGIN</title>
</head>
<body>
  <h3>ADMIN LOGIN PAGE</h3><br>
    <form action="" method="post">
      EMAIL:<input type="text" name="email" required><br>
      PASSWORD:<input type="password" name="password" required><br>
      <input type="submit" name="submit">
    </form>
    <?php
    session_start();
    $email="";
    $name="";
  //isset isly use hoga btton click hua h ya ni
  if(isset($_POST['submit'])){

       $connection=mysqli_connect("localhost","root",""); //databse connection
       $db= mysqli_select_db($connection,"sms"); // to select db

       //logins table se fetch krne k liye qury likhni hogi
       $query="select * from login where email='$_POST[email]'"; //jo ham form k through type kre h
       $query_run=mysqli_query($connection,$query);//to execue or run  query
       while($row=mysqli_fetch_assoc($query_run)){ //row nme k array mai fetch data aa chuka h
         if($row['email']==$_POST['email']){
           if($row['password']==$_POST['password']){
             $_SESSION['email']=$row['email'];
                $_SESSION['name']=$row['name'];
             header("Location: admin2_dashboard.php"); //row jo db mai h pswrd n post jo form mai h
             echo "login successful";

         }else{
           echo "wrong password";
         }

  }else{
    echo "wrong email id";
  }
}
}
  ?>
  </body>
  </html>
