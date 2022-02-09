let totalCarrito = document.getElementById("total");

function mostrarCarrito() {
    $(".filaProducto").remove()
    $(".filaTotal").remove()

    let productosLocalJson = sessionStorage.getItem("productos");
    let productos = JSON.parse(productosLocalJson) == null ? [] : JSON.parse(productosLocalJson)

    var htmlTabla;
    var htmlTotales;
    let contador = 1;
    let totales = 0.00

    $.each(productos, function (index, element) {
        htmlTabla = '<TR class="filaProducto">';
        htmlTabla += '<TD class="d-none">' + index + '</TD>';
        htmlTabla += '<TD>' + contador + '</TD>';
        htmlTabla += '<TD><img class="productImage" src="' + element.foto + '" class="" alt=""></TD>';
        htmlTabla += '<TD>' + element.producto + '</TD>';
        htmlTabla += '<TD>'
        htmlTabla += '<input type="number" name="cantidad" id="cantidad" class="form-control" value="' + element.cantidad + '">'
        htmlTabla += '</TD>';
        htmlTabla += '<TD>' + element.precio + '</TD>';
        htmlTabla += '<TD>' + element.total + '</TD>';
        htmlTabla += '<TD><button type="submit" class="btn btn-danger" onclick="eliminar(' + index + ');">X</button></TD>'
        htmlTabla += '</TR>'
        $('.tableBody').append(htmlTabla);

        htmlTotales = '<p class="filaTotal">'
        htmlTotales += '<aside class="float-start filaTotal">' + element.producto + ' </aside>'
        htmlTotales += '<aside class="float-start filaTotal"> S/.</aside>'
        htmlTotales += '<aside class="filaTotal">' + element.total + '</aside>'
        htmlTotales += '</p>'
        $('#productos_carrito').append(htmlTotales);

        contador += 1
        totales = totales + element.total

    });

    totalCarrito.innerHTML = totales

}

mostrarCarrito()

function guardarCambios() {
    let productosLocalJson = sessionStorage.getItem("productos");
    let productos = JSON.parse(productosLocalJson) == null ? [] : JSON.parse(productosLocalJson)

    $(".filaProducto").each(function () {
        let hijos = $(this).children();

        productos[parseInt(hijos[0].innerHTML)].cantidad = hijos[4].children[0].value
        productos[parseInt(hijos[0].innerHTML)].total = parseFloat(hijos[5].innerHTML) * parseFloat(hijos[4].children[0].value)

        let productosJson = JSON.stringify(productos)
        sessionStorage.setItem("productos", productosJson);

        mostrarCarrito()
    });
}

function eliminar($i) {
    let productosLocalJson = sessionStorage.getItem("productos");
    let productos = JSON.parse(productosLocalJson) == null ? [] : JSON.parse(productosLocalJson)

    let newProductos = productos.filter(function (currentValue, index, arr) {
        return index != $i
    })

    let productosJson = JSON.stringify(newProductos)
    sessionStorage.setItem("productos", productosJson);

    mostrarCarrito()
}

