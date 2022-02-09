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
        <img class="imageMain" src="src/images/electrodomesticos.jpg" class="img-fluid " alt="tienda">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="formMain col-8 bg-white mt-5 p-4 rounded">
                    <div class="row">
                        <a href="<?php echo urlsite ?>?page="><button type="button" class="btn btn-primary">Atras</button></a>
                        <div class="col-4">
                            <label for="" class="d-none" id="linkImage"><?php echo $datos[0]->image?></label>
                            <img class="" src="<?php echo $datos[0]->image?>" class="" alt="">
                        </div>
                        <div class="col-8">
                            <h2 id="productName"><?php echo $datos[0]->product_name?></h2>
                            <p >S/.<aside id="precio"><?php echo $datos[0]->precio?></aside></p>
                            <p><?php echo $datos[0]->product_description?></p>
                            <form action="#" class="row">
                                <div class="col-5">
                                    <input type="number" name="cantidad" id="cantidad" class="form-control">
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-primary col-5" href="javascript:;" onclick="añadirCarrito();">Añadir Carrito</button>
                                </div>
                            </form>
                            <p>INFORMACION</p>
                            <p><?php echo $datos[0]->detalle?></p>
                        </div>
                    </div>
                    <!-- <h1 class="text-center mb-4">PRODUCTOS</h1> 
                    <div class="row cards">

                    </div> -->
                    <!-- <div class="mb-3 d-flex justify-content-center">
                        <a class="btn btn-primary" href="<?php echo urlsite ?>?page=productos" role="button">
                        Productos</a>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <a class="btn btn-primary" href="<?php echo urlsite ?>?page=categorias" role="button">
                        Categorias</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="./src/js/detalleProducto.js"></script>
</body>
</html>