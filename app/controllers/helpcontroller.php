<?php

class Help extends Controller {

	function __construct() {
		parent::__construct();
	}

	public function other($arg = false) {
		echo 'we are inside other<br />';
		echo 'Optional: ' . $arg . '<br />';

		require 'models/help_model.php';
		$model = new Help_Model();
	}
	public function index(){
		echo ' you reached the help controller';
	}

}
