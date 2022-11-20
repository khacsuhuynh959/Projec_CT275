<?php 
include('Model/session.php');
Session::checkLogin('loginad');
include('Model/database.php');
?>

<?php
    class login {

        private $db;

        public function __construct(){
            $this->db = new Database();
        }
        
        public function login_ad($user, $pass){

            $query = "SELECT * FROM admin WHERE username = '$user' and pass_word = '$pass' limit 1";
            $result = $this->db->select($query);

            if($result != false) {
                $value = $result->fetch_assoc();
                Session::set('loginad', $value['ten']);

                header('Location: index.php');
            }else {
                $alert = "Tên đăng nhập hoặc mật khẩu không đúng *";
                return $alert;
            }
        }
    }
?>