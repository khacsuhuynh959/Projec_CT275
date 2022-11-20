<?php
    require_once('model/database.php');
    require_once('model/session.php');
?>

<?php
    class giohang{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function add_cart($idsp) {
                $soluong = 1;
                $query = "SELECT * FROM san_pham WHERE ma_sp = '$idsp'";
                $result = $this->db->select($query);
                $row = $result->fetch_array();

                if($row) {
                    $new_product = [ 'ma_dm' => $row['ma_dm'], 'id' => $idsp, 'tensanpham' => $row['ten_sp'] ,'soluong' => $soluong, 'giasp' => $row['gia'], 
                    'hinhanh' => $row['anh'] ];
                
                    if(isset($_SESSION['product'][$idsp])) {
                        if($_SESSION['product'][$idsp]['soluong'] < $row['so_luong']){
                            $_SESSION['product'][$idsp]['soluong'] += 1;
                        }
                    } else {
                        $_SESSION['product'][$idsp] = $new_product;
                    }
                } 
        }
        
        public function cong($idsp) {
            $query = "SELECT * FROM san_pham WHERE ma_sp = '$idsp'";
            $result = $this->db->select($query);
            $row = $result->fetch_array();
            if($_SESSION['product'][$idsp]['soluong'] < $row['so_luong'])
                $_SESSION['product'][$idsp]['soluong'] += 1;
        }

        public function tru($idsp) {
            if($_SESSION['product'][$idsp]['soluong'] > 1)
                $_SESSION['product'][$idsp]['soluong'] -= 1;
        }

        public function xoa($idsp) {
            session::unset('product',$idsp);
        }

        public function checkAddress($user) {
            $sql = "SELECT * 
                    FROM Khachhang kh JOIN Dia_Chi_GH dc WHERE kh.KH_Username = '$user' and kh.KH_Ma = dc.KH_Ma";
            $result = $this->db->select($sql);
            if($result == false) {
                return false;
            } else {
                $row = $result->fetch_array();
                return $row['DCGH'];
            }
        }

        public function get_makh($user) {
            $query = "SELECT * FROM Khachhang WHERE KH_Username = '$user'";
            $result = $this->db->select($query);
            $row = $result->fetch_array();
            if($result == null) {
                return false;
            } else {
                return $row['KH_Ma'];
            }
        }

        public function muahang($mahd,$makh,$sum,$ngaydh,$ngaygh) {
            $sql = "INSERT INTO Don_Hang VALUES('$mahd','$makh','$sum','$ngaydh','$ngaygh')";
            $result = $this->db->insert($sql);

            foreach($_SESSION['product'] as $cart_item) {
                $soluong = $cart_item['soluong'];
                $idsp = $cart_item['id'];
                $tensp = $cart_item['tensanpham'];
    
                $sql_ctdh = "INSERT INTO ct_don_hang VALUES('$mahd','$idsp','$tensp',$soluong)";
                $result_ct = $this->db->insert($sql_ctdh);
            }

            if($result) {
                $msg = "<span class='success'>Đặt hàng thành công</span>";
                Session::unset_cart('product');
                return $msg;
            }else{
                $msg = "<span class='success'>Đặt hàng không thành công</span>";
                return $msg;
            }
        }

        public function themdiachi($user,$dc){
            $query = "INSERT INTO dia_chi_gh VALUES('$user','$dc')";
            $result = $this->db->insert($query);
            if($result) {
                $msg = "<span class='success'>Thêm dịa chỉ thành công</span>";
                return $msg;
            }else{
                $msg = "<span class='success'>Thêm địa chỉ không thành công</span>";
                return $msg;
            }
            header('Location: giohang.php?action=dathang');
        }

        public function thaydoidiachi($user,$dc){
            $query = "UPDATE dia_chi_gh SET DCGH = '$dc' WHERE KH_Ma = '$user'";
            $result = $this->db->update($query);
            if($result) {
                $msg = "<span class='success'>Cập nhật dịa chỉ thành công</span>";
                return $msg;
            }else{
                $msg = "<span class='success'>Cập nhật địa chỉ không thành công</span>";
                return $msg;
            }
            // header('Location: giohang.php?action=dathang');
        }
    }
?>