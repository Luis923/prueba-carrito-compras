<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/carrito.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <img class="imageMain" src="src/images/tienda.jpg" class="img-fluid " alt="tienda">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="formMain col-8 bg-white mt-5 p-4 rounded">
                    <a href="<?php echo urlsite ?>?page="><button type="button" class="btn btn-primary">Seguir comprando</button></a>
                    <div class="row">
                        <h1 class="text-center">CARRITO DE COMPRAS</h1>
                        <div class="tabla col-8">
                            <!-- <div class=""> -->
                                <TABLE class='table'>
                                    <THEAD class='table-dark'>
                                    <TR>
                                    <TH class="d-none">Index</TH>
                                    <TH>N°</TH>
                                    <TH>Foto</TH>
                                    <TH>Producto</TH>
                                    <TH>Cantidad</TH>
                                    <TH>Precio</TH>
                                    <TH>Total</TH>
                                    <TH>Eliminar</TH>
                                    </TR>
                                    </THEAD>
                                    <TBODY class="tableBody">

                                    </TBODY>
                                </TABLE>
                            <!-- </div> -->
                        </div>
                        <div class="col-4">
                            <h2>TOTALES</h2>
                            <div id="productos_carrito">

                            </div>
                            <p class="float-start">Total: S/.<aside id="total"></aside></p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning m-3" href="javascript:;" onclick="guardarCambios();">Guardar cambios</button>
                    <a href="<?php echo urlsite ?>?page=pedido&opcion=mostrarFormulario"><button type="button" class="btn btn-info">Hacer pedido</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="./src/js/carrito.js"></script>
</body>
</html>