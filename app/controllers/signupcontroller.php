<?php
Class Signup extends Controller{

	function __construct() {
		parent::__construct();
		require 'app/models/signup_model.php';

	}
	public function index(){
		$this->view->render('signup/index');
	}
	public function createdb(){
		$model = new signup_model();
		$model->createdb();
	}
	public function createtables(){
		$model = new signup_model();
		$model->createtables();
	}
}
