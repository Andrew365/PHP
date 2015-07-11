<?php
require 'routesSP.php';



class Router{



  function __construct(){

      $urls = array(
        "blah",
        "help"
      );
      $check = new error_check($urls);
      $route = new Route('GET', 'blah', 'indexcontroller', 'index', '');
      $route = new Route('GET', 'help', 'helpcontroller', 'index', '');




  }
}
