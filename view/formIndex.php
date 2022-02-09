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
                <div class="formMain col-10 bg-white mt-5 p-4 rounded">
                    <a href="<?php echo urlsite ?>?page=productos&opcion=carrito"><button type="button" class="btn btn-primary">Ver carrito</button></a>
                    <h1 class="text-center mb-4">PRODUCTOS</h1> 
                    <div class="row cards">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="./src/js/index.js"></script>
</body>
</html>