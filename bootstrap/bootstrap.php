<?php

class Bootstrap {

    function __construct() {

      require 'config/routes.php';

}
      //     $url = isset($_GET['url']) ? $_GET['url'] : null;
      //     $url = rtrim($url, '/');
      //     $url = explode('/', $url);
      //
      //       //sets defualt page to index
      //     if (empty($url[0])) {
      //         require 'app/controllers/indexcontroller.php';
      //         $controller = new Index();
      //         $controller->index();
      //         return false;
      //     }
      //
      //     $file = 'app/controllers/' . $url[0] .'controller'. '.php';
      //     if (file_exists($file)) {
      //         require $file;
      //     } else {
      //         $this->error();
      //         return false;
      //     }
      //
      //     $controller = new $url[0];
      //
      //     // calling methods
      //     if (isset($url[2])) {
      //         if (method_exists($controller, $url[1])) {
      //             $controller->{$url[1]}($url[2]);
      //         } else {
      //             $this->error();
      //             return false;
      //         }
      //     } else {
      //         if (isset($url[1])) {
      //             if (method_exists($controller, $url[1])) {
      //                 $controller->{$url[1]}();
      //             } else {
      //                 $this->error();
      //             }
      //         } else {
      //             $controller->index();
      //         }
      //     }
      //
      //
      // }
      //
      // function error() {
      //     require 'app/controllers/errorcontroller.php';
      //     $controller = new Error();
      //     $controller->index();
      //     return false;
      // }

}
