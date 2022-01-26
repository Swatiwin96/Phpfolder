<?php

$conn=mysqli_connect("localhost", "root","","mydb6");

if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
//$db=mysqli_select_db($connection,"testing");
/*create db
$sql = 'CREATE Database mydb6';
if(mysqli_query( $conn,$sql)){
  echo "Database mydb created successfully.";
}else{
echo "Sorry, database creation failed ".mysqli_error($conn);
}*/

//create table
$sql1= "create table emp5(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,
emp_salary INT NOT NULL,primary key (id))";
if(mysqli_query($conn, $sql1)){
 echo "Table emp5 created successfully";
}else{
echo "Could not create table: ". mysqli_error($conn);
}
$sql2 = 'INSERT INTO emp5(name,salary) VALUES ("sonoo", 9000)';
if(mysqli_query($conn, $sql2)){  
 echo "Record inserted successfully";
}else{
echo "Could not insert record: ". mysqli_error($conn);
}


mysqli_close($conn);


?>
