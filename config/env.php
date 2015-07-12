<?php

 //State your environement

 $development = true;
 $production = false;
/////////////////////////////////////////////////////////
 $env =/*put your env type here!!*/ $production;
 ////////////////////////////////////////////////////////
if($env == $production){
  $debug = false;
  $servername = '';
  $database = '';
  $table1 = '';

}
elseif($env = $development){
  $debug = true;
  $servername = '';
  $database = '';
  $table1 = '';
}
