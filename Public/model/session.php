<?php

    class Session{
        public static function init(){
            session_start();
        }

        public static function set($key, $val) {
            // self::init();
            $_SESSION[$key] = $val;
        }

        public static function get($key) {
            if(isset($_SESSION[$key])) {
                return $_SESSION[$key];
            } else {
                return false;
            }
        }

        public static function get_thuoctinh($key,$id) {
            if(isset($_SESSION[$key][$id])) {
                return true;
            } else {
                return false;
            }
        }

        public static function checkSession($key) {
            // self::init();
            if(self::get($key) == false) {
                return false;
            }else{
                return true;
            }
        }

        public static function checkLogin($key) {
            // self::init();
            if(self::get($key) != false) {
                header('Location: index.php');
            } 
        }

        public static function unset($key,$idsp) {
            unset($_SESSION[$key][$idsp]);
            header('Location: giohang.php');
        }

        public static function unset_cart($key) {
            unset($_SESSION[$key]);
            header('Location: giohang.php');
        }

        public static function destroy() {
           session_destroy();
           header('Location: index.php');
        }
    }

?>