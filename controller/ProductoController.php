<?php
require "model/producto.php";
class ProductoController{

    public static function listar(){
        $trabajador = new Producto();
        $datos = $trabajador->obtenerProductos();
        echo json_encode($datos);
    }

    public static function detalle($id){
        $producto = new Producto();
        $datos = $producto->obtenerDetalleProducto($id);
        require "view/producto/formDetalle.php";
    }

    public static function carrito(){
        require "view/producto/formCarrito.php";
    }
  
}           
?>