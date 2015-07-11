<?php

class Error extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index(){

		echo 'error index method';

	}
	function  routingerror(){
		echo "Routing Error";
	}

}
