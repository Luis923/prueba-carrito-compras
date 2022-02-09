<?php
    require "config.php";
    $page = "index";
    $id = "";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    switch($page){
        case 'productos':
            require "controller/ProductoController.php";
            if(isset($_GET['opcion'])):
                $metodo = $_GET['opcion'];
                if(method_exists('ProductoController',$metodo)):
                    ProductoController::{$metodo}($id);
                endif;
            else:
                ProductoController::form_welcome();
            endif;
            break;
        case 'pedido':
            require "controller/PedidoController.php";
            if(isset($_GET['opcion'])):
                $metodo = $_GET['opcion'];
                if(method_exists('PedidoController',$metodo)):
                    PedidoController::{$metodo}();
                endif;
            else:
                PedidoController::index();
            endif;
            break;
        default:
            require "controller/IndexController.php";
            IndexController::index();
            break; 
    }

?>