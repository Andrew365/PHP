<?php

class error extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->view->render('error/index');

	}
	function  routingerror(){
		echo "Routing Error";
	}
	function bigerror(){
		echo'Oops, Something just went horribley wrong';
	}

}
