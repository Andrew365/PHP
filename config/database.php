<?php

Class Database extends PDO{

  function __construct(){
    require 'config/env.php';
    $conn = mysqli_connect($dbhost, $dbusername, $dbpass);
  }

}
