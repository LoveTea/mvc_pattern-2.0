<?php

class Article extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function getPage($page = false) {
        if($page === false) {
            $page = 1;
        }
        $this->limit = 5;
        $this->count = $this->model->getPageModel();
        $this->total_pages = ceil($this->count / $this->limit);
        $this->offset = ($page - 1) * $this->limit;
    }

    public function getList($page = false) {
        $this->getPage($page);
        $data = $this->model->getListModel($this->offset, $this->limit);
        $this->view->render('article/getlist', $data, "Новости" , $this->total_pages);
    }

    public function getArticle($id) {
        $data = $this->model->getArticleModel($id);
        $this->view->render('article/getarticle', $data, $data['title']);
    }
}