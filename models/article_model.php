<?php

class ArticleModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPageModel() {   
        $result = $this->db->query("SELECT title from articles");
        return $result->rowCount();
    }

    public function getListModel($offset, $limit) {
        $result = $this->db->query("SELECT * from articles ORDER BY time DESC LIMIT $offset, $limit");
        return $result->fetchAll();
    }

    public function getArticleModel($id) {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->execute(['id'  => $id]);
        $result = $stmt->fetch();
        return $result;
    }
}