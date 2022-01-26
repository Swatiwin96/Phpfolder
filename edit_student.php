<?php
$connection=mysqli_connect("localhost","root",""); //databse connection
$db= mysqli_select_db($connection,"sms");
$query="update stu set name ='$_POST[name]',class=$_POST[class] where roll_no=$_POST[roll_no]"; //jo ham form k through type kre h
$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("Details Edited successfully");
window.Location.href="student_dashboard.php";
</script>
