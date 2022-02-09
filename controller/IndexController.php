<?php
    session_start();
    class IndexController{
        public function index(){
            require "view/formIndex.php";
        }
    }
?>