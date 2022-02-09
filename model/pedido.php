<?php
    require "model/conexion.php";
    class Pedido{

        private $_db;
        public function __construct(){
            $this->_db = new Conexion();
        }

        public function insertar($data){  
            $this->_db->conectar();
            $consulta = $this->_db->conexion->query("INSERT pedidos VALUES(default,'$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");
            /* $consulta -> execute(); */
            $this->_db->desconectar();
        }

    }