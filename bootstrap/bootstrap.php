<?php

class Bootstrap {

    function __construct() {

      require 'config/routes.php';
      $router = new Router();
      //$check_error = new error_check($urls);

  }
}
