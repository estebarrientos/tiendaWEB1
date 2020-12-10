<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wallie Toys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php
    
    //rutina para consultar todos los datos de una tabla

    //1. Incluir el archivo BaseDatos.php (Para pdoer usar la clase)
    include("BaseDatos.php");

    //2. Crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();
    
    //3. Escribir una consulta SQL para buscar datos(La que usted necesite)
    $consultaSQL="SELECT * FROM productos WHERE 1";

    //4. Utilizar el metodo consultarDatos de mic lase BaseDatos
    $productos=$transaccion->consultarDatos($consultaSQL);

    

?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Editar Productos</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Wallie Toys</h1>
                <img src="https://i.ibb.co/VV4zj2m/Logo.jpg" alt="Logo Wallie" class="img-fluid img-thumbnail">
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Listado Productos</a>
                    <a href="#" class="list-group-item">Registro Productos</a>
                </div>
            </div>


            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://i.ibb.co/0YwNppf/Cry-Babies-Lea.jpg"
                                alt="Cry Lea">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://i.ibb.co/ct7DbmT/Dreamy.jpg" alt="Dreamy">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="https://i.ibb.co/P9GrM2S/Mochila-Toy-Story.jpg"
                                alt="Toy Story">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                    <?php foreach($productos as $producto): ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="<?php echo($producto["foto"])?>"
                                    alt="<?php echo($producto["nombre"])?>"></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#"><?php echo($producto["nombre"])?></a>
                                </h4>
                                <h5>$<?php echo($producto["precio"])?></h5>
                                <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                    data-target="#editar<?php echo($producto["id_producto"])?>">
                                    Editar
                                </button>
                            </div>
                            <a href="eliminarProducto.php?id=<?= ($producto["id_producto"])?>"
                                class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edición de Productos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label >Nombre de Producto</label>
                                                    <input type="text" class="form-control" id="nombreEditar"
                                                        aria-describedby="emailHelp">
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp">
                                                    <div id="emailHelp" class="form-text">We'll never share your email
                                                        with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword1">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me
                                                        out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php endforeach ?>
                </div>
            </div>



        </div>


    </div>


    </div>


    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</body>

</html>