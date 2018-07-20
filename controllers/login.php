<?php 

class Login extends Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if(isset($_POST['ok'])) {
            $data = $this->model->loginModel($_POST);
            if($data['status'] == "ok") header('Location: /');
        }
        $this->view->render('login/index', $data, 'Авторизация');
    }

    public function logout() {
        session_unset();
        session_destroy();
        header('Location: /');
    }
}