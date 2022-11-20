<?php 
require_once('Model/session.php');
Session::checkLogin('loginkh');
require_once('Model/database.php');
?>

<?php
    class login {

        private $db;

        public function __construct(){
            $this->db = new Database();
        }
        
        public function login_kh($user, $pass){

            $query = "SELECT * FROM khachhang WHERE KH_Username = '$user' and KH_Matkhau = '$pass' limit 1";
            $result = $this->db->select($query);

            if($result != false) {
                $value = $result->fetch_array();
                Session::set('loginkh', $value['KH_Username']);
                header('Location: index.php');
                
            }else {
                $alert = "Tên đăng nhập hoặc mật khẩu không đúng *";
                return $alert;
            }
        }
    }
?>