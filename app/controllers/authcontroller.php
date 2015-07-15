<?php
class Auth extends Controller {

	function __construct()
	{
		parent::__construct();
	}
  public function createdb(){
    require 'app/models/authmodel.php';
    $auth = new Auth_model();
    $auth->createdb();
  }
  public function createtables(){
    require 'app/models/authmodel.php';
    $auth = new Auth_model();
    $auth->createtables();
  }
}
