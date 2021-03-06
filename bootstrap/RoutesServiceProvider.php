<?php
Class Route {

  function __construct($http, $url, $controller, $method, $params){
  if($http == "GET"){
    if($params = null){
      return true;
    }
    $burl = isset($_GET['url']) ? $_GET['url'] : null;
    $burl = rtrim($burl, '/');
    $burl = explode('/', $burl);

    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if (empty($burl[0])) {
            require 'app/controllers/indexcontroller.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        elseif ($burl[0] == 'index' || $burl[0] == "Index") {
          require 'app/controllers/indexcontroller.php';
          $controller = new Index();
          $controller->index();
          return false;
        }
/////////////////////////////////////////////////////////////////////////////////////////////
    if($burl == $url){
      $file = 'app/controllers/' . $controller . '.php';

        if(file_exists($file)){
          require $file;
        }
        else{
          $this->error();
          return false;
        }
      $findcont = $controller;
      $class  = rtrim($controller, 'controller');
      $classname = $class;
      $class = new $class;

          if (isset($params)) {
              if (method_exists($findcont, $method)) {
                  $findcont->{$method}($params);
              } else {
                  $this->methoderror();
                  return false;
              }
          } else {
              if (isset($controller)) {
                  if (method_exists($classname, $method)) {
                      $class->{$method}();
                  } else {
                      $this->methoderror();
                      return false;
                  }
                }
              }

          }///////////end of if burl = url[0]

        }

  }//end of function

  function error() {
      require 'app/controllers/errorcontroller.php';
      $controller = new Error();
      $controller->index();
      return false;
  }
  function methoderror(){
    echo 'The method doesnt exist';
  }
}//end of class

class error_check{
    function __construct($urls){
        $erc = isset($_GET['url']) ? $_GET['url'] : null;
        $erc = rtrim($erc, '/');
        $erc = explode('/', $erc);
        if(empty($erc[0])){
          return true;
        }
        if(in_array($erc[0], $urls)){
        return true;
      }
      else{
        if($erc[0] != "index" && $erc[0] != "Index" && !in_array($erc[0], $urls)){
        require'config/env.php';
        require 'app/controllers/errorcontroller.php';

        if($debug = true){
        $cont = new Error();
        $cont->routingerror();
      }
        elseif($debug = false){
          $cont = new Error();
          $cont->index();
        }
        else{
          $cont = new Error();
          $cont->bigerror();
        }
      }
      }
    }
}
