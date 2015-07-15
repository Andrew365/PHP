<?php

class Auth_model extends Model {

    function __construct() {

    }

      public function createdb(){
        require 'config/env.php';
        require 'config/database.php';
            $conn = mysqli_connect($dbhost, $dbusername, $dbpass);
        $sql = "CREATE DATABASE " . $dbname;
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("Database Created Sucessfully");</script>';
            $this->redirect();
        } else {
          require 'config/env.php';
          if($debug = true){
            require 'app/controllers/errorcontroller.php';
            $error = new Error();
            $error->index();

          }
          else{

          }
      }
    }
      public function createtables(){
        require 'config/env.php';
        require 'config/database.php';
          $conn = mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);
      // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error()) . "Code 21";
                return false;
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
              echo '<script>alert("tables created successfully");</script>';
              $this->redirect();
          } else {
              echo "Error creating table: " . mysqli_error($conn);
          }

          mysqli_close($conn);

}
public function redirect(){
  require 'app/controllers/indexcontroller.php';
  $controller = new Index();
  $controller->index();
  return false;
}

}
