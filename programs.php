
<!--
function sayHello($name="Ram"){
echo "Hello $name";
}
sayHello("Sonoo");
sayHello();   //passing no value
sayHello("Vimal");

function add(...$numbers) {
    $sum = 0;
    foreach ($numbers as $n) {
        $sum += $n;
    }
    return $sum;
}

echo add(1, 2, 3, 4);
//call by value


function adder($str2)
{
    $str2 .= 'Call By Value';
}
$str = 'Hello ';
adder($str);
echo $str;

//recursive public function FunctionName($value='')
function display($number){
  if($number<=5){
    echo "$number<br>";
    display($number+1);
  }
}
display(1);*/

/*for($i=0;$i<=5;$i++){
for($j=1;$j<=$i;$j++){
  echo "*";
}
echo "<br>";
}*/
<?php
for($i=2;$i<=10;$i+=2){
echo "$i";
}
?>
