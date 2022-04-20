<?php

namespace modules\controllers;

use \Controller;

class MainController extends Controller {
	
    protected function template($viewName, $data = array()) {
        
        $view = $this->view('template');
        $view->bind('viewName', $viewName);
        $view->bind('data', array_merge($data));
    }

}

?>