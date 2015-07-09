<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
		echo 'We are in index';
	}
	public function index(){
		echo'index function';
	}
}