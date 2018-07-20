<?php

class Admin extends Controller {


    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if($_SESSION['isAdmin'] == true) $this->view->render('admin/index', null, 'Админка');
        else $this->view->render('admin/error');
    }

    public function addnews() {

        if(isset($_POST['ok'])) {
            $this->model->addNewsModel($_POST);
        } 

        if($_SESSION['isAdmin'] == true) $this->view->render('admin/addnews', null, 'Добавить новость');
        else $this->view->render('admin/error');        
    }

    public function deletenews() {

        if(isset($_POST['ok'])) {
            $this->model->deleteNewsModel($_POST['id']);
        }       

        if($_SESSION['isAdmin'] == true) $this->view->render('admin/deletenews', null, 'Удалить новость');
        else $this->view->render('admin/error'); 
    }

    public function updatenews() {
        if(isset($_POST['find'])) {
           $data = $this->model->findNewsModel($_POST['id']);
           if($_SESSION['isAdmin'] == true) $this->view->render('admin/updatenews', $data, 'Обновить новость');
           else $this->view->render('admin/error');     
        } 
        if(isset($_POST['ok'])) {
            $this->model->updateNewsModel($_POST);
        }       
        
        if($_SESSION['isAdmin'] == true) $this->view->render('admin/updatenews', null, 'Обновить новость');
        else $this->view->render('admin/error'); 
    }

}