function listar() {
  $.ajax(`http://localhost/prueba-carrito-compras/?page=productos&opcion=listar`, {
    dataType: 'json',
    contentType: 'application/json',
    cache: false
  })
    .done(function (response) {
      var html;

      $.each(response, function (index, element){

        html =  '<a id="link" href="http://localhost/prueba-carrito-compras/?page=productos&opcion=detalle&id='+element.idproduct+'" class="col-4 text-decoration-none text-black">' 
        html +=   '<div class="productCard">' 
        html +=       '<img class="productImage w-75 h-75 img-thumbnail" src="'+element.image+'" alt="">'
        html +=       '<h2 class="productName">'+element.product_name+'</h2>'
        html +=       '<p class="productDescription">'+element.product_description+'</p>'
        html +=       '<p class="productPrice">S/.'+element.precio+'</p>'
        html +=   '</div>'
        html += '</a>'
        $('.cards').append(html);
      });
    });
}

listar()