<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallie Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


</head>

<body>
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
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container-fluid">
        <div class="row justify-content-center bg">
            <div class="col-12 col-sm-6 col-md-3">
            <form action="registrarProductos.php" method="POST" class="form-container">
            <h1>Registro De Productos</h1>

            <div class="row">
                <div class="col">
                    <label class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                </div>
                <div class="col">
                <label class="col-form-label">Marca:</label>
                    <input type="text" class="form-control" placeholder="Marca" name="marca">
                </div>
                <div class="col">
                    
                <label class="col-form-label">Precio</label>
                    <input type="text" class="form-control" placeholder="Precio" name="precio">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label class="font-weight-bold">Descripción:</label>
                    <textarea class="form-control" rows="4" name="descripcion"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label class="font-weight-bold">Foto:</label>
                    <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                    <button type="submit" class="btn btn-info btn-block mt-4" name="botonEnvio">Registrar</button>
                </div>
            </div>
            
        </form>


            </div>
        </div>


        
    </main>



    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Esteban Barrientos Aguirre</p>
            <p class="m-0 text-center text-white">Medellín, Colombia 2020</p>
        </div>

    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>