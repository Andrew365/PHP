<?php

// Use an autoloader!
require 'bootstrap/bootstrap.php';

require 'config/Controller.php';
require 'config/Model.php';
require 'config/View.php';

define('URL', 'http://localhost/MVC/');

$app = new Bootstrap();
