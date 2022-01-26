<!DOCTYPE html>
<html>
<head>
  <title>LOGIN PAGE</title>
</head>
<body>
  <h3>STUDENT MANAGEMENT SYSTEM</h3><br>
    <form action="" method="post">
      <input type="submit" name="admin_login" value=" adimin login">
    </form>
    <?php
  //isset isly use hoga btton click hua h ya ni
  if(isset($_POST['admin_login'])){
    header("Location: admin_login.php");    //header fn vha redirct kr dega jo hmne loctn provide kii hai
  }
  ?>
  </body>
  </html>
