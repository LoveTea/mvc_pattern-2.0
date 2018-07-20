<?php 

class AdminModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function addNewsModel($data) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, announce, text) VALUES(:title, :announce, :text)");
        $stmt->execute(['title' => $data['title'], 'announce' => $data['announce'], 'text' => $data['text']]);
    }
    
    public function deleteNewsModel($data) {
        $stmt = $this->db->prepare("DELETE from articles WHERE id = :id");
        $stmt->execute(['id' => $data]);
    }

    public function findNewsModel($data) {
        $stmt = $this->db->prepare("SELECT id, title, announce, text FROM articles WHERE id=:id");
        $stmt->execute(['id' => $data]);
        $result = $stmt->fetch();
        return $result; 
    }

    public function updateNewsModel($data) {
        echo $data['id'];
        $stmt = $this->db->prepare("UPDATE articles SET title=:title, announce=:announce, text=:text WHERE id=:id");
        $stmt->execute(['id' => $data['id'], 'title' => $data['title'], 'announce' => $data['announce'], 'text' => $data['text']]);
       
    }
}