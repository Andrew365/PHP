<?php

 //State your environement

 $development = true;
 $production = false;
 	error_reporting(0);
  ////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
 $env =/*put your env type here!!*/ $development;      //
 ////////////////////////////////////////////////////////

if($env == $production){
  $debug = false;
  define('URL', 'http://localhost/MVC/');//change this when you deploy

  /////////DB INFO///////////
  $dbtype = '';
  $dbhost = '';
  $dbname = '';
  $dbusername = '';
  $dbpass = '';
  $tb1='Users';
}
elseif($env = $development){
  $debug = true;
  define('URL', 'http://localhost/MVC/');

  /////////////////DB INFO/////////////
  $dbtype = 'msyql';
  $dbhost = 'localhost';
  $dbname = 'MVC';
  $dbusername = 'root';
  $dbpass = '';
  $tb1='Users';
}
