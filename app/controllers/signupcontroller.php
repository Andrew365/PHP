<?php
Class Signup extends Controller{

	function __construct() {
		parent::__construct();
		require 'app/models/signup_model.php';
		$model = new signup_model();
	}
	public function index(){
		$this->view->render('signup/index');
	}
}
