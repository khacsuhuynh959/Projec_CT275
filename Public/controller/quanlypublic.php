<?php
    include('model/database.php');
?>

<?php
    class brand{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function ds_brand(){
            $query = "SELECT * FROM Danh_Muc";
            $result = $this->db->select($query);
            return $result;
        }
    }

    class product{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function ds_product(){
            $query = "SELECT * FROM San_Pham";
            $result = $this->db->select($query);
            return $result;
        }

        public function ds_product_search($search_name){
            $query = "SELECT * FROM San_Pham WHERE ten_sp LIKE '%$search_name%'";
            $result = $this->db->select($query);
            return $result;
        }

        public function ds_product_page($pagedm){
            $query = "SELECT * FROM San_Pham LIMIT $pagedm,12";
            $result = $this->db->select($query);
            return $result;
        }

        public function ds_product_iddm($iddm){
            $query = "SELECT * FROM San_Pham WHERE ma_dm = '$iddm'";
            $result = $this->db->select($query);
            return $result;
        }

        public function ds_product_iddm_page($iddm,$pagedm){
            $query = "SELECT * FROM San_Pham WHERE ma_dm = '$iddm' LIMIT $pagedm,12";
            $result = $this->db->select($query);
            return $result;
        }
    }


?>
