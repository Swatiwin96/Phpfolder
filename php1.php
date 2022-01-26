<?php
/*$c=13;
$v=15;
echo "string is:$c+$v";
$c="esha";
$v="swati";
echo "$c+$v";
$_c="esha";
$v="swati";
echo "$_c+$v";
if elseif else
$a=1;
if($a>2){
  echo "swati";
}elseif($a>6){
    echo "not equal to";
  }
  else{
  echo "not equl to";
  }

//while
$n=1;
while($n<=5){
  echo "swati";
  $n++;
}
//DO WHILE
$n=1;
do{
  echo "swati";
$n++;
}while($n<5)

//BREAK and CONTINUE

for($a=1;$a<10;$a++){
  if($a==3){
    continue;
  }
  echo "$a<br>";
}
//SWITCH
$weekday=2;
switch($weekday){
  case 1:
  echo ("today is Monday");
  break;
  case 2:
  echo ("today is tuesday");
  break;
  default:
  echo( "enter the valid week day");
}

/*
$num=20;
switch($num){
case 10:
echo("number is equals to 10");
break;
case 20:
echo("number is equal to 20");
break;
case 30:
echo("number is equal to 30");
break;
default:
echo("number is not equal to 10, 20 or 30");
}

//operators
$a=10;
$b=3;
$c=$a%$b;
echo "$c";
$a=10;
$b="swati";

echo $a!==$b;
$a=5;$b=9;

if($a>5 && $b>6){
  echoo "true statement";

}
for($i=0;$i<10;$i++){
  if($i==3){
    break;
  }
  echo $i."<br>";
}

///SUPER GLOBAL variable

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo $_REQUEST['fname'];

session_start();
$_SESSION["favcolor"]="onge";
echo "session variable is set";

//ARRAY
$ball=["esha","swati"];
  echo $ball[0];

$cat=array("ram","krishna");
 foreach ($cat as $c) {
  // cecho ode...
  echo $c;
  $cat=[ "boll"=>"100","red"=>"300"];
  echo $cat["boll"];

$cat["boll"]="100";
$cat["red"]="swati";
echo $cat["red"];
$emp = array
  (
  array(1,"sonoo",400000),
  array(2,"john",500000),
  array(3,"rahul",300000)
);
$ball=["esha","swati"];
$c=array_search("swati",$ball);
  echo $c;
//echo n print
$fname = "Gunjan";
$lname = "Garg";
print "My name is: ".$fname,$lname;
$lang = "PHP";
   $ret = print $lang." is a web development language.";
   print "</br>";
   print "Value return by print statement: ".$ret;

////
//echo "<pre>";
//print_r($_GET);
//echo "</pre>";
//echo $_GET["fname"];


$name=$_GET["fname"];//receiving name field value in $name variable
echo "Welcome, $name";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo $_REQUEST["fname"];
//foreach
$cat=[1,2,5];
foreach($cat as $v){
  echo $v;
}
//SWITCH

$weekday=2;
switch($weekday){
  case 1:
  echo ("today is sunday");
  break;
  case 2:
  echo "today is tuesday";
  break;
  default:
  echo "not match";
}
for($i=1;$i<5;$i++){
  if($i==3){
    continue;
  }
  echo "$i.<br>";

}
$n=4;
while($n<5){
  echo $n;
  $n++;
}
$n=2;
do{
  echo "swatii.<br/>";
  $n++;
}while($n<4)
$name1=array("sonoo","john","vivek","smith");
$name2=array("umesh","sonoo","kartik","smith");
$name3=array_intersect($name1,$name2);
foreach( $name3 as $n )
{
  echo "$n<br />";
}
$season=array("summer","winter","spring","autumn");
$key=array_search("spring",$season);
echo $key;
$season=array("summer","winter","spring","autumn");
$reverseseason=array_reverse($season);
foreach( $reverseseason as $s )
{
  echo "$s</br >";
}
$cat=array("neetu","peetu")
$cnn=sort($cat);
foreach($cnn as$v){
  echo "$v";
}
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");

print_r(array_chunk($salary,3));
$salary=array("Sonoo"=>"550000","Vimal"=>250000,"Ratan"=>"200000");
print_r(array_change_key_case($salary,CASE_UPPER));
$str="My name is KHAN";
 echo $str=ucfirst($str);//echo $str;
$str="my name is KHAN";
$str=ucwords($str);
echo $str;
$str="My name is KHAN";
$str=strlen($str);
echo $str;
$str="MY name IS KHAN";
$str=lclast($str);
echo $str;

$handle = fopen("c:\\folder\\file.txt", "r");
$cool=array("swati","esha");
  echo $cool[1];

$cool=array("swati"=>40,"esha"=>"nonu")
echo $cool["swati"];

$emp = array
  (
  array(1,"sonoo",400000),
  array(2,"john",500000),
  array(3,"rahul",300000)
  );

for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 3; $col++) {
    echo $emp[$row][$col]."  ";
  }
  echo "<br/>";
}


for ($i=1; $i<=5; $i++)
{
for($j=1;$j<=$i;$j++)
{
echo " * ";
}//condition fail inner loop terminated.
echo "<br/>";
}
//magic constant
    echo "<h3>Example for __LINE__</h3>";
    // print Your current line number i.e;4
    echo "You are at line number " . __LINE__ . "<br><br>";

    echo "<h3>Example for __FILE__</h3>";
        //print full path of file with .php extension
        echo __FILE__ . "<br><br>";

echo "<h3>Example for __DIR__</h3>";
    //print full path of directory where script will be placed
    echo __DIR__ . "<br><br>";
    //below output will equivalent to above one.
    echo dirname(__FILE__) . "<br><br>";

echo "<h3>Example for __FUNCTION__</h3>";
//Using magic constant inside function.
function test(){
    //print the function name i.e; test.
    echo 'The function name is '. __FUNCTION__ . "<br><br>";
}
test();

//Magic constant used outside function gives the blank output.
function test_function(){
    echo 'Hie';
}
test_function();
//give the blank output.
echo  __FUNCTION__ . "<br><br>";
class JTP
{
    public function __construct() {
        ;
}
function getClassName(){
    //print name of the class JTP.
    echo __CLASS__ . "<br><br>";
    }
}
$t = new JTP;
$t->getClassName();

//in case of multiple classes
class base
{
function test_first(){
        //will always print parent class which is base here.
        echo __CLASS__;
    }
}
class child extends base
{
    public function __construct() {
        ;
    }
}
$t = new child;
$t->test_first();
?>
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo $_GET["fname"]

$name=$_GET["fname"];//receiving name field value in $name variable
echo "Welcome, $name


$name=$_GET["name"];//receiving name field value in $name variable
echo "Welcome, $name";


$name=$_POST["name"];//receiving name field value in $name variable
$password=$_POST["password"];//receiving password field value in $password variable

echo "Welcome: $name, your password is: $password";
$name=$_POST["name"];//receiving name field value in $name variable
$password=$_POST["password"];//receiving password field value in $password variable

echo "Welcome: $name, your password is: $password";
?>
<table>
<tr>
<td><?php echo $_POST['username'];?></td>
<td><?php echo $_POST['password'];?></td>
</tr>
</table>
$season=array("summer","winter","spring","autumn");
echo $season[3];
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");
print_r(array_change_key_case($salary,case_upper));
?>
function swati($name="swati"){
  echo $name;
}
swati("ram");
swati("mon");
swati("pop");
swati();


function factorial($n){
  if($n==0){
    return 1;
  }else{
    return($n*factorial($n-1));
  }
  }
  echo factorial(3);

$num=10;
echo "$num";
echo '$num';
echo 'I am a \'php\' coder';
$num=10;
echo <<< 'MYDATA'
WELCOME to geekyshows
It is very "important" data $num
MYDATA;


$filename = "c\\file1.txt";
$fp = fopen($filename, "r");//open file in read mode

$contents = fread($fp, filesize($filename));//read file

echo "<pre>$contents</pre>";//printing data of file
fclose($fp);//close file*/


?>
