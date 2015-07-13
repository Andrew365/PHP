<?php
class signup_model extends Model {
	//something about database
	function __construct() {
		require 'config/database.php';
		$db = new Database();
	}
	public function createdb(){
		$db = new Database();

				$db->createdb();
	}
	public function createtables(){
		$db = new Database();

		$db->createtables();
	}
}
