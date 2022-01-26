<?php
$connection=mysqli_connect("localhost","root",""); //databse connection
$db= mysqli_select_db($connection,"sms");
$query="insert into student values('',$_POST[roll_no],'$_POST[name]',$_POST[class])";

$query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
alert("student added successfully");
window.Location.href="admin2_dashboard.php";
</script>
