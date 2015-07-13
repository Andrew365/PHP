<?php

Class Database extends PDO{

  function __construct(){
    // parent::_construct("{$dbtype}:host={$dbhost};dbname={$dbname}", "{$dbusername}", "{$dbpass}");
  }
  public function createdb(){
    require 'config/env.php';
    $conn = mysqli_connect($dbhost, $dbusername, $dbpass);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE " . $dbname;
    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("Database Created Sucessfully");</script>';
    } else {
      require 'app/controllers/errorcontroller.php';
        $error = new Error();
        $error->index();

    }
  }
  public function createtables(){
    require 'config/env.php';
    $conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);
// Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error()) . "Code 21";
  }

  // sql to create table
  $sql = "CREATE TABLE {$tb1}(
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(120) NOT NULL,
  email VARCHAR(60) NOT NULL,
  password VARCHAR(120) NOT NULL,
  reg_date TIMESTAMP,
  activated ENUM('0','1') DEFAULT '0',
  user_level ENUM('1', '2') DEFAULT '1'
  )";

  if (mysqli_query($conn, $sql)) {
    echo "Table {$tb1} created successfully";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);

  }
}
