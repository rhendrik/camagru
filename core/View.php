<?php

class View {
	protected $_head, $_body, $_siteTitle, $_outputBuffer, $_layout = DEFAULT_LAYOUT;

	public funtion __construct(){
	}

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

	public funtion content($type){
	if($type == 'head'){
	}
	}
}
