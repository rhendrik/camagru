<?php

class Home extends Controller {
	public function __construct($controller, $action) {
		parent::__construct($controller, $action);
	}

	public function indexAction(){
		$db = DB::getInstance();
		$sql = "SELECT * FROM test";
		$testQ = $db->query($sql);
		dnd($testQ);
		$this->view->render('home/index');
	}
}
