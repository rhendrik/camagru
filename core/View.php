<?php

class View {
	protected $_head, $_body, $_siteTitle, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

	public funtion __construct(){
	}

	//setters
	public function render($viewName){
		$viewArray = explode('/', $viewName);
		$viewString = implode(DS, $viewArray);
		if(file_exists(ROOT . DS . 'views' . DS . $viewString . '.php') {
			include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
			include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
		} else {
			die('The view \"' . $viewName . '\" does not exist.' );
		}
	}

	public function content($type){
		if($type == 'head'){
			return $this->_head;
		} elseif ($type == 'body'){
			return $this->_body;
		}
		return false;
	}

	//getters
	public function start($type){
	}

	public function end(){
	}

	public function setSiteTitle($title){
	}

	public function setLayout($path){
	}
}
