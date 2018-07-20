<?php

class RegistrationModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function registrModel($data) {
        $login = htmlspecialchars(trim($data['login']));
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO user(login,password) VALUES(:login, :password)");
        $stmt->execute(['login' => $login, 'password' => $password]);
        
    }
}