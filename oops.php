<?php
//ABSTRACTION
  abstract class php{
 abstract public function cat();
}
class javascript extends php{
  public function cat(){
    echo "dis";
  }
}

$obj=new javascript();
$obj->cat();
//INHERITANCE
class a{
  public function parent(){
    echo "parent";
  }
}
class b extends a{
public function child(){
  echo "parent and child";
}
  }
  $obj=new b();
  $obj->child();

//constant

class java{
  const a=5;
}
echo java::a;

//this
 class M{
   public $model;
   public function display(){
     echo $this->model;
   }
 }
  $obj=new M();
  $obj->model="swati";
  $obj->display();

  //INTERFACE
interface c{
  public function JJ();
}
  interface d{
  public function MM();
}
class demo implements c,d{
  public function JJ(){
    echo "interface 1";
  }
  public function MM(){
    echo "interface 2";
  }
}
$obj=new demo();
$obj->MM();

//ACCESS SPECIFIER
/*
class maya{
  private function do(){
    echo "public";
  }
}
$obj=new maya();
$obj->do();
*/
//final
/*final class Dog{
  public function done(){
    echo "can't inherit final class";
  }
  class ro extends Dog{
    public function done1(){
    echo "cant";
  }
}*/
//CONSTRUCTOR

class FAME{
  public function __construct(){
    echo "hello";
  }
}
$obj=new FAME();

//DESTRUCTOR


class demoo{
  public function dem(){
    echo "constructor";
  }
}
class demo1 extends demoo{
  public function __construct(){
    echo "dee";
  }
  public function __destruct(){
    echo "see";
  }
}
$obj=new demo1();

//final
/*
 class Dis{
 final function do(){
    echo "swati";
  }
  function do1(){
    echo "esha";
  }
}
class vis extends Dis{
  function do(){
     echo "swati";
   }
}
$obj=new Dis();
$obj->do1();*/

class pop
    {
        function fun1()
        {
            echo "javatpoint";
        }
    }
    class Z extends pop
    {
        function fun2()
        {
            echo "SSSIT";
        }
    }
    $obj= new Z();
    $obj->fun1();
    

?>
