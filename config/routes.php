<?php
require 'bootstrap/RoutesServiceProvider.php';
class Router{
  function __construct(){
/*
*Put all urls that you route as the second param below in the $urls array
*putting a url in this array exempts it from error handling
*/
      $urls = array(
        //"blah",
        "help",
        "signup"
      );
/*
*Here you turn on the error checking for $urls
*/
      $check = new error_check($urls);
/*
*Here you register your routes with the format...
*$var = new Route('request type', 'desired url', 'full controllername',
*'method inside that controller', 'and then the params to pass if there isnt any leave two empty qoutes');
*
* !!IMPORTANT!! Dont try to register a default page the default is set inside RoutesSP.php !!IMPORTANT!!
*/
      // $route = new Route('GET', 'blah', 'indexcontroller', 'index', '');
      $route = new Route('GET', 'help', 'helpcontroller', 'index', '');
      $route1 = new Route('GET', 'signup', 'signupcontroller', 'index', '');

  }
}
