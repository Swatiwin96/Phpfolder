<?php
/*echo"swai"."<br>";
echo "swati" ."baba";
echo ('swati');
$name="swati";
echo $name."<br>";
var_dump($name);
$a=6;
if($a<2){
  echo "true";
}
else {
  echo "false";
}
///REVERSE NUMBER
$n=1234;
$sum=0;
while($n>0){
  $r=$n%10;
  $sum=($sum*10)+$r;
  $n=($n/10);
}
echo("reverse number:$sum


///reverse STRING
$string="SWATI";
$length=strlen($string);
for($i=$length-1;$i>=0;$i--){
  echo $string[$i];




$n=1234;
$rev=0;
while($n > 1){
  $r=$n % 10;
  $rev=($rev*10)+ $r;
  $n=($n / 10);
}
echo "Reverse number of 1234 is:$rev"


////PRINT A STAR
for ($i = 0; $i < 6; $i++)///for row
   {

       for($j = 0; $j < $i; $j++ )//for column
       {

           // Printing stars
           echo "* ";
       }

       // ending line after
       // each row
       echo "<br>";
   }


//fibonic series


$num = 0;
$a = 0;
$b = 1;
echo "<h3>Fibonacci series for first 12 numbers: </h3>";
//echo "\n";
echo $a.' '.$b.' ';
while ($num < 10 )
{
    $c = $a + $b;
    echo $c.' ';
    $a = $b;
    $b = $c;
    $num = $num + 1;
}
//FACTORIAL
$num = 4;
$factorial = 1;
for ($i=$num; $i>=1; $i--)
{
  $factorial = $factorial * $i;
}
echo "Factorial of $num is $factorial";

//swapping of two numbers
$a = 45;
$b = 78;
// Swapping Logic
$third = $a;
$a = $b;
$b = $third;
echo "After swapping:<br><br>";
echo "a =".$a. "b=".$b;
//sum of digit
//$a=1456;
$sum=0;
$num=134;
while($num>0){
  $r=$num%10;
  $sum=$sum+$r;
  $num=$num/10;

}
echo $sum;

//STAR PATTERN
for($i=0;$i<=5;$i++){
for($k=5;$k>=$i;$k--){
echo "  ";
}
for($j=1;$j<=$i;$j++){
echo "*  ";
}
echo "<br>";
}
for($i=4;$i>=1;$i--){
for($k=5;$k>=$i;$k--){
echo "  ";
}
for($j=1;$j<=$i;$j++){
echo "*  ";
}
echo "<br>";
}
//PRIME NUMBER
$count = 0;
$num = 2;
while ($count < 15 )
{
$div_count=0;
for ( $i=1; $i<=$num; $i++)
{
if (($num%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
echo $num." , ";
$count=$count+1;
}
$num=$num+1;
}
//PYRAMID PATTERN
$n=4;
for($i=1;$i<=$n;$i++){
  for($j=1;$j<=(2*$n)-1;$j++){
    if($j>=$n-($i-1)&& $j<=$n+($i-1)){
  echo "*";
}else{
  echo "&nbsp;&nbsp";
}
}
echo "<br/>";
}
//PRIME NUMBER

for($i=1;$i<=10;$i+=2){


  echo "$i<br>";
}

$a=5;
$b=10;$c=5;
$c=$a;
$a=$b;
$b=$c;
echo " value of a is:$a";
echo " value of b is:$b";
*/


for($i=0;$i<=5;$i++){
  for($j=0;$j<=$i;$j++){
    echo "*";
  }
  echo "<br>";
}

?>
