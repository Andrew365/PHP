<?php

class Error extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index(){

		echo 'error index method';
		$this->view->render('error/index.php');

	}
	function  routingerror(){
		echo "Routing Error";
	}

}
