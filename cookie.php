<?php

$cookie_name="usersss";
$cookie_value="Yahoo baba";

setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
//setcookie($cookie_name,$cookie_value,time()-(86400*30),"/");//to delete cookie

 ?>
 <html>
 <body>
   <?php
   if(!isset($_COOKIE[$cookie_name])){
     echo "cookie is not set";
   //echo $_COOKIE[$cookie_name];
 }else{
   echo $_COOKIE[$cookie_name];
 }
   ?>
 </body>
 </html>
