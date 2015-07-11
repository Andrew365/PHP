<?php

 //State your environement

 $development = true;
 $production = false;

 $env =/*put your env type here!!*/ $development;
if($env = $development){
  define('URL', 'http://localhost/MVC/');
}
