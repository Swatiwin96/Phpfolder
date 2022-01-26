<!--
for($i=1;$i<=10;$i+=2){
echo "$i<br>";
}

$num=1.8;
if($num%2==0){
  echo "even no";
}else{
  echo "not even";
}

$string="swati";
$l=strlen($string);
for($i=($l-1);$i>=0;$i--){
  echo "$string[$i]";
}


$n=123;
while($n>0){
  $r=$n % 10;
  $sum=$sum*10+$r;
  $n=$n/10;
}
echo "$sum";

$n=123;
$sum=0;
while($n>0){
  $r=$n % 10;
  $sum=$sum+$r;
  $n=$n/10;
}
echo "$sum";

$n=123;
$count=0;
while($n>0){
  $count++;
  $n=$n/10;
}
echo "$count";

$a=[1,3,4,5,7];
echo array[$a];

$a=0;$num=0;
$b=1;
echo $a;
echo $b;
while($num<10){
$c=$a+$b;
echo "$c";
$a=$b;
$b=$c;
$num++;}-->
<?php
$a=5;
$b=6;
$c=$a;

$a=$b;
$b=$c;
echo a=".$a";//some error
echo $b;
  ?>
