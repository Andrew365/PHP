<?php
Class Signup extends Controller{

	function __construct() {
		parent::__construct();
	}
	public function index(){
		$this->view->render('signup/index');
	}
}