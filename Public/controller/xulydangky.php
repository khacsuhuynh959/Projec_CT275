<?php 
require_once('Model/session.php');
Session::checkLogin('loginkh');
require_once('Model/database.php');
?>

<?php
    class dangky {

        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function checkUser($user) {
            $query = "SELECT * FROM Khachhang WHERE KH_Username = '$user'";
            $result = $this->db->select($query);

            if($result != false) {
                return true;
            } else {
                return false;
            }
        }
        
        public function dangky_kh($makh,$hoten,$ngaysinh,$sdt,$username,$pass,$cfpass){
            if($pass == $cfpass && $this->checkUser($username) == false) {
                $query = "INSERT INTO Khachhang VALUES('$makh','$hoten','$ngaysinh','$sdt','$username','$pass')";
                $result = $this->db->insert($query);
                $alert = "<span class='success' >Đăng ký tài khoản thành công *</span> <a href='login.php'>Đăng nhập ngay</a>";
                return $alert;
            } elseif ($pass != $cfpass) {
                $alert = "<span class='error' >Mật khẩu nhập lại không trùng khớp *</span>";
                return $alert;
            } else {
                $alert = "<span class='error' >Username đã tồn tại *</span>";
                return $alert;
            }
        }
    }
?>