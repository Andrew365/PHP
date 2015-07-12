<?php

class Error extends Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->view->msg = 'Oops there has been an error';
		$this->view->render('error/index');
	}
	function  routingerror(){
		$this->view->msg = 'There appears to be a routing error!';
		$this->view->render('error/index');
	}
	function bigerror(){
		$this->view->msg = 'There has been a fatal routing error';
		$this->view->render('error/index');
	}

}
