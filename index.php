<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wallie Toys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    
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
                            <a class="nav-link" href="index.php">Inicio

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formularioProductos.php">Registrar/ingresar Productos</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container bgi">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">Wallie Toys</h1>
                <img src="https://i.ibb.co/VV4zj2m/Logo.jpg" alt="Logo Wallie" class="img-fluid img-thumbnail">
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Listado Productos</a>
                    <a href="formularioProductos.php" class="list-group-item">Registro Productos</a>
                </div>
            </div>


            <div class="col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.ibb.co/0YwNppf/Cry-Babies-Lea.jpg" class="d-block img-fluid  " alt="LEA">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/m50pTBY/Mochila-Cry-Babies.jpg" class="d-block img-fluid " alt="MOCHILA">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/fQPDRJw/Katie.jpg" class="d-block img-fluid " alt="KATIE">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>



                <div class="row">
                    <?php foreach($productos as $producto): ?>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="<?php echo($producto["foto"])?>"
                                alt="<?php echo($producto["nombre"])?>">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <?php echo($producto["nombre"])?>
                                </h4>
                                <h5>$<?php echo($producto["precio"])?></h5>
                                <p class="card-text"><?php echo($producto["descripcion"])?></p>

                            </div>
                            <a href="eliminarProductos.php?id=<?= ($producto["id_producto"])?>"
                                class="btn btn-warning">Eliminar</a>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#editar<?php echo($producto["id_producto"])?>">
                                Editar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editar<?php echo($producto["id_producto"])?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edición de Productos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form
                                                action="editarProductos.php?id=<?php echo($producto["id_producto"]) ?>"
                                                method="POST">
                                                <div class="mb-3">
                                                    <label>Nombre de Producto</label>
                                                    <input type="text" class="form-control" name="nombreEditar"
                                                        value="<?php echo($producto["nombre"])?>">

                                                </div>
                                                <div class="mb-3">
                                                    <label>Precio:</label>
                                                    <input type="number" class="form-control" name="precioEditar"
                                                        value="<?php echo($producto["precio"])?>">

                                                </div>
                                                <div class="mb-3">
                                                    <label>Descripción:</label>
                                                    <textarea class="form-control" name="descripcionEditar" rows="3">
                                                    <?php echo($producto["descripcion"])?>
                                                    </textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                    name="botonEditar">Guardar</button>
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

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Esteban Barrientos Aguirre</p>
            <p class="m-0 text-center text-white">Medellín, Colombia 2020</p>
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