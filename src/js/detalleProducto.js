console.log("detalle");

let linkImage = document.getElementById("linkImage");
let productName = document.getElementById("productName");
let cantidad = document.getElementById("cantidad");
let precio = document.getElementById("precio");

function añadirCarrito() {
    console.log("añadirCarrito");

    let total = parseFloat(precio.innerHTML) * parseFloat(cantidad.value)

    let productosLocalJson = sessionStorage.getItem("productos");
    let productos = JSON.parse(productosLocalJson) == null ? [] : JSON.parse(productosLocalJson)

    productos.push({
        "foto": linkImage.innerHTML,
        "producto": productName.innerHTML,
        "cantidad": cantidad.value,
        "precio": precio.innerHTML,
        "total": total
    })

    let productosJson = JSON.stringify(productos)
    sessionStorage.setItem("productos", productosJson);

    window.location.href = "http://localhost/prueba-carrito-compras/?page=productos&opcion=carrito";
}   