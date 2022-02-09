<?php
require "model/pedido.php";
class PedidoController{

    public static function mostrarFormulario(){
        require "view/pedido/formPedido.php";
    }

    public static function insertar(){
        $_distrito = $_POST['distrito'];
        $_direccion = $_POST['direccion'];
        $_detalle = $_POST['detalle'];
        $_referencias = $_POST['referencias'];
        $_telefono = $_POST['telefono'];
        $_fecha = $_POST['fecha'];
        $_metodoPago = $_POST['metodoPago'];
        $_productos = $_POST['productos'];

        $pedido = new Pedido();
        $data      = [$_distrito,$_direccion,$_detalle,$_referencias,$_telefono,$_fecha,
                        $_metodoPago, $_productos];
        $accion    = $pedido->insertar($data);

        header('location:'.urlsite."?page=");
    }
}           
?>