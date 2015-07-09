<?php

class Controller {

	function __construct() {
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		if(method_exists())


		echo 'Main controller<br />';
		$this->view = new View();
	}

}