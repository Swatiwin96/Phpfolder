<!DOCTYPE html>
<html>
<head>
  <title>ADMIN DASHBOARD</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap-4.4.1/js/jquery_latest.js"></script>
  <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  #header{
    height:10%;
    width:100%;
    top:2%;
    background-color: black;
    position:fixed;
    color:white;
  }
  #left_side{
    height:75%;
    width:15%;
    top:10%;
    position:fixed;
}
  #right_side{
    height: 75%;
    width:80%;
    background-color: whitesmoke;
    position: :fixed;
    left:17%;
    top:21%;
    color:red;
    border:solid 1px black;

  }
  #top_span{
    top:15%;
    width:80%;
    left:17%;
    position:fixed;
  }
  #td{
    border:1px solid black;
    padding-left:2px;
    text-align:left;
    width:200px;
  }

  </style>
  <?php
  session_start();
  $name="";
  $connection=mysqli_connect("localhost","root",""); //databse connection
  $db= mysqli_select_db($connection,"student"); // to select db

  //logins table se fetch krne k liye qury likhni hogi
//  $query="select * from logins where email='$_POST[email]'"; //jo ham form k through type kre h
  //$query_run=mysqli_query($connection,$query);//to execue or run  query
//  while($row=mysqli_fetch_assoc($query_run)){ //row nme k array mai fetch data aa chuka h
  ?>
</head>
<body>
  <div id="header"><br>

    <center>STUDENT MANAGEMENT SYSTEM &nbsp;&nbsp&nbsp;&nbsp; Email:<?php echo  $_SESSION['email'];?>&nbsp&nbsp&nbsp&nbsp Name:<?php echo $_SESSION['name']; ?>
      <a href ="logout.php">logout</a>
    </center>
  </div>
  <span id="top_span"><marquee>NOTE:this portal is open till 10 april</marquee></span>
  <div id="left_side"><br><br>
    <br>
    <form action="" method="post">
      <table>
        <tr>
          <td>
            <input type="submit" name="search_student" value="Search Student">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="edit_student" value="edit Student">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="add_new_student" value="add Student">
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="delete_student" value="delete Student">
          </td>
        </tr>
      </div>
      <div id ="right_side"><br><br>
        <div id="demo">
          <?php
          if(isset($_POST['search_student'])){
            ?>
            <center>
            <form action="" method="post">
              Enter roll no:
              <input type ="text" name="roll_no">
              <input type="submit" name="search_by_roll_no_for_search" value="Search">

        </form><br><br>
        <h4><b><u>Student's details</u></b><h4><br><br>
      </center>
        <?php
      }
      if(isset($_POST['search_by_roll_no_for_search'])){
        $query="select * from stu where roll_no='$_POST[roll_no]'"; //jo ham form k through type kre h
        $query_run=mysqli_query($connection,$query);//to execue or run  query
        while($row=mysqli_fetch_assoc($query_run)){ //row nme k array mai fetch data aa chuka h
        ?>

         <table>
          <tr>
            <td><b>ROLL NO:&nbsp</b></td>
            <td><input type="text" value="<?php echo $row['roll_no'];?>" disabled>
            </td>
            </tr>
            <tr>
              <td><b>Name:&nbsp</b></td>
              <td><input type="text" value="<?php echo $row['name'];?>" disabled>
              </td>
              </tr>
              <tr>
                <td><b>CLASS:&nbsp</b></td>
                <td><input type="text" value="<?php echo $row['class'];?>" disabled>
                </td>
                </tr>
          </table>

<?php
      }
    }
    ?>
    <?php
    if(isset($_POST['edit_student']))
    {
      ?>
      <center>
      <form action="" method="post">
      &npsp;&nbsp;<b>  Enter roll no:</b>&nbsp;&npsp;  <input type ="text" name="roll_no">
        <input type="submit" name="search_by_roll_no_for_edit" value="Search">

  </form><br><br>
  <h4><b><u>Student's details</u></b><h4><br><br>
</center>
<?php
}
if(isset($_POST['search_by_roll_no_for_edit'])){
$query="select * from stu where roll_no=$_POST[roll_no]"; //jo ham form k through type kre h
$query_run=mysqli_query($connection,$query);//to execue or run  query
while($row=mysqli_fetch_assoc($query_run)){ //row nme k array mai fetch data aa chuka h
?>
<form action="admin_edit_student.php" method="post" >
 <table>
  <tr>
    <td><b>ROLL NO:&nbsp</b></td>
    <td><input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>">
    </td>
    </tr>
    <tr>
      <td><b>Name:&nbsp</b></td>
      <td><input type="text"name="name" value="<?php echo $row['name'];?>">
      </td>
      </tr>
      <tr>
        <td><b>CLASS:&nbsp</b></td>
        <td><input type="text" name="class" value="<?php echo $row['class'];?>" >
        </td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="edit" value="Save"></td>
        </tr>
  </table>
</form>
  <?php
}
}
 ?>
<?php
if(isset($_POST['add_new_student'])){
  ?>
  <center><h4>FILL THE GIVEN DETAILS</h4></center>
  <form action="add_student.php" method="post">
    <table>
      <tr>
        <td>RollNO:</td>
        <td>
          <input type="text" name="roll_no" required>
        </td>
      </tr>
      <tr>
        <td>NAME:</td>
        <td>
          <input type="text" name="roll_no" required>
        </td>
      </tr>
      <tr>
        <td>CLASS:</td>
        <td>
          <input type="text" name="roll_no" required>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="add" value="Add Student">
        </td>
      </tr>


    </table>
      </form>
      <?php
}
}
 ?>
<?php
    if(isset($_POST['delete_student']))
    {
      ?>
      <center>
      <form action="delete_student.php" method="post">
      &nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
      <input type="submit" name="search_by_roll_no_for_delete" value="Delete">
      </form><br><br>
      </center>
      <?php
    }
    ?>

    <?php
      if(isset($_POST['add_new_student'])){
        ?>
        <center><h4>Fill the given details</h4></center>
        <form action="add_student.php" method="post">
          <table>
          <tr>
            <td>
              <b>Roll No:</b>
            </td>
            <td>
              <input type="text" name="roll_no" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Name:</b>
            </td>
            <td>
              <input type="text" name="name" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Father's Name:</b>
            </td>
            <td>
              <input type="text" name="father_name" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Class:</b>
            </td>
            <td>
              <input type="text" name="class" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Mobile:</b>
            </td>
            <td>
              <input type="text" name="mobile" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Email:</b>
            </td>
            <td>
              <input type="text" name="email" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Password:</b>
            </td>
            <td>
              <input type="password" name="password" required>
            </td>
          </tr>
          <tr>
            <td>
              <b>Remark:</b>
            </td>
            <td>
              <textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><br><input type="submit" name="add" value="Add Student"></td>
          </tr>
        </table>
        </form>
        <?php
      }
    ?>
    <?php
      if(isset($_POST['show_teacher']))
      {
        ?>
        <center>
          <h5>Teacher's Details</h5>
          <table>
            <tr>
              <td id="td"><b>ID</b></td>
              <td id="td"><b>Name</b></td>
              <td id="td"><b>Mobile</b></td>
              <td id="td"><b>Courses</b></td>
              <td id="td"><b>View Detail</b></td>
            </tr>
          </table>
        </center>
        <?php
        $query = "select * from teachers";
        $query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run))
        {
          ?>
          <center>
          <table style="border-collapse: collapse;border: 1px solid black;">
            <tr>
              <td id="td"><?php echo $row['t_id']?></td>
              <td id="td"><?php echo $row['name']?></td>
              <td id="td"><?php echo $row['mobile']?></td>
              <td id="td"><?php echo $row['courses']?></td>
              <td id="td"><a href="#">View</a></td>
            </tr>
          </table>
          </center>
          <?php
        }
      }
    ?>


      </div>
    </div>
</body>
  </html>
