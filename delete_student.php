<script type="text/javascript">
if(confirm("Are you sure want to delete?")){
document.write("<?php
$connection=mysqli_connect("localhost","root",""); //databse connection
$db= mysqli_select_db($connection,"sms");
$query="delete from student where roll_no=$_POST[roll_no]"; //jo ham form k through type kre h
$query_run=mysqli_query($connection,$query);
 ?>");
 window.location.href="admin2_dashboard.php"
}
else{
  window.location.href="admin2_dashboard.php";
}
</script>
