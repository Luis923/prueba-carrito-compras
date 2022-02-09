<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/index.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <img class="imageMain" src="src/images/tienda.jpg" class="img-fluid " alt="tienda">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="formMain col-8 bg-white mt-5 p-4 rounded">
                    <a href="<?php echo urlsite ?>?page=productos&opcion=carrito"><button type="button" class="btn btn-primary">Atras</button></a>
                    <a href="<?php echo urlsite ?>?page="><button type="button" class="btn btn-primary">Seguir comprando</button></a>
                    <h2>PEDIDO</h2>
                    <!-- <div class="row"> -->
                        <form class="row">
                        <div class="col-6 mb-3">
                            <label for="selectdistrito" class="form-label">Distrito</label>
                            <select id="selectdistrito" class="form-select">
                                <option value="" disabled selected>[Seleccione]</option>
                                <option value="SURCO">Santiago de Surco</option>
                                <option value="SAN BORJA">San Borja</option>
                                <option value="LINCE">Lince</option>
                                <option value="CALLAO">Callao</option>
                                <option value="VILLA MARIA">VIlla Maria del Triunfo</option>
                                <option value="VILLA EL SALVADOR">VIlla el Salvador</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="inputDireccion" class="form-label">Direccion de Entrega</label>
                            <input type="text" class="form-control" id="inputDireccion" placeholder="Nombre de la calle, avenida, jiron, etc">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="inputDetalle" class="form-label">Detalle de Direccion</label>
                            <input type="text" class="form-control" id="inputDetalle" placeholder="Edificio, departamento, etc">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="inputReferencias" class="form-label">Referencias</label>
                            <input type="text" class="form-control" id="inputReferencias">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="inputTelefono" class="form-label">Telefono</label>
                            <input type="number" class="form-control" id="inputTelefono" aria-describedby="">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="inputFecha" class="form-label">Fecha de entrega</label>
                            <input type="date" class="form-control" id="inputFecha" aria-describedby="">
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                            <p>Metodo de pago:</p>
                            <input class="form-check-input" type="radio" name="metodoPago" id="flexRadioDefault1" value="Paypal">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Paypal
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodoPago" id="flexRadioDefault1" value="Transferencia">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Transferencia
                            </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary m-3" href="javascript:;" onclick="insertar();">Hacer Pedido</button>
                        <!-- <button type="submit" class="btn btn-primary"></button> -->
                        </form>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="./src/js/pedido.js"></script>
</body>
</html>