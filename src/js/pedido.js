let select_distrito = document.getElementById("selectdistrito");
let input_direccion = document.getElementById("inputDireccion");
let input_detalle = document.getElementById("inputDetalle");
let input_referencias = document.getElementById("inputReferencias");
let input_telefono = document.getElementById("inputTelefono");
let input_fecha = document.getElementById("inputFecha");

function insertar() {
    
    let productosLocalJson = sessionStorage.getItem("productos");
    let productos = JSON.parse(productosLocalJson) == null ? [] : JSON.parse(productosLocalJson)

    let datos = {
        distrito: select_distrito.value,
        direccion: input_direccion.value,
        detalle: input_detalle.value,
        referencias: input_referencias.value,
        telefono: input_telefono.value,
        fecha: input_fecha.value,
        metodoPago: $('input[name="metodoPago"]:checked').val(),
        productos: productosLocalJson
    }

    $.ajax(`http://localhost/prueba-carrito-compras/?page=pedido&opcion=insertar`, {
    type: 'post',
    data: datos,
    }).done(volver())
} 
function volver(){
    sessionStorage.setItem("productos", []);
    window.location.href = "http://localhost/prueba-carrito-compras/?page=productos&opcion=carrito";
}  