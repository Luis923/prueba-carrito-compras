<?php
    require "model/conexion.php";
    class Producto{

        private $_db;
        public function __construct(){
            $this->_db = new Conexion();
        }

        public function obtenerProductos(){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM productos");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }

        public function obtenerDetalleProducto($id){
            $this->_db->conectar();
            $consulta = $this->_db->conexion->prepare("SELECT *FROM productos WHERE idproduct = $id");
            $consulta -> execute();
            while($row=$consulta ->fetch(PDO::FETCH_OBJ)){
                $this->lista[]= $row;
            }
            $this->_db->desconectar();
            return $this->lista;
        }
    }