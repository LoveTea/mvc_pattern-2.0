<?php 

class LoginModel extends Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function loginModel($data) {
        $login = htmlspecialchars(trim($data['login']));
        $password = $data['password'];
        
        $stmt = $this->db->prepare("SELECT login, password, access FROM user WHERE login=:login");
        $stmt->execute(['login' => $login]);
        $result = $stmt->fetch();

        if(password_verify($data['password'], $result['password'])) {
            if($result['access'] == 5) $_SESSION['isAdmin'] = true;
            $_SESSION['islogin'] = true;
            $_SESSION['login'] = $result['login'];
            return ["status" => "ok"];
        } else {
            return ["status" => "error"];
        }
    }
}
