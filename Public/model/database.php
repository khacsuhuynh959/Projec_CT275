<?php
    require_once('../config/connect.php');
?>

<?php 

class Database{
    public $host = HOST;
    public $user = USER;
    public $pass = PASS;
    public $dbname = DBNAME;

    public $link;   
    public $error;

    public function __construct(){
        $this->connectDB();
    }

    public function connectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link) {
            $this->error = "connection fail".$this->link->connect_error();
            return false;
        }
    }

    public function select($query) {
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }

    }

    public function insert($query) {
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row) {
            return $insert_row;
        } else {
            return false;
        }

    }

    public function update($query) {
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($update_row) {
            return $update_row;
        } else {
            return false;
        }

    }

    public function delete($query) {
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($delete_row) {
            return $delete_row;
        } else {
            return false;
        }

    }

    public function count($query) {
        $count_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($count_row) {
            return $count_row;
        } else {
            return false;
        }

    }
}

?>