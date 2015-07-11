<?php

class Error extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->view->render('error/index');
	}
	function index(){

		echo 'error index method';

	}
	function  routingerror(){
		echo "Routing Error";
	}

}
