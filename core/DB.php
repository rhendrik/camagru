<?php

class DB {
	 private static $_instance = null;
	 private $_pdo, $_query, $_error = false, $_result, $_count = 0, $_last_insertID = null;

	 //instatiate new PDO object
	 private function __construct(){
		 try {
			 $this->_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
		 } catch(PDOException $e) {
			 die($e->getMessage());
		 }
	 }

	 public static function getInstance() {
		 if(!isset(self::$_instance)) {
			 self::$_instance =  new DB();
		 }
		 return self::$_instance;
	 }
}
