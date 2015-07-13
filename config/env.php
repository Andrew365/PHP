<?php

 //State your environement

 $development = true;
 $production = false;
/////////////////////////////////////////////////////////
 $env =/*put your env type here!!*/ $development;
 ////////////////////////////////////////////////////////
if($env == $production){
  $debug = false;
  $servername = '';
  $database = '';
  $table1 = '';
  define('URL', 'http://localhost/MVC/');//change this when you deploy
}
elseif($env = $development){
  $debug = true;
  $servername = '';
  $database = '';
  $table1 = '';
  define('URL', 'http://localhost/MVC/');
}
