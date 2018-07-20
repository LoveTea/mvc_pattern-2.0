<?php

class Controller {    
     public function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {
        $modelName = $name . 'model';
        $path = 'models/' . $name . '_model.php';
        if(file_exists($path)) {
            require_once $path;
            $this->model = new $modelName;
        }        
    }
}