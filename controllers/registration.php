<?php

class Registration extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if(isset($_POST['ok'])) {
            $this->model->registrModel($_POST);
        }
        $this->view->render('registration/index', null, 'Регистрация');
    }

}