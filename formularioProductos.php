<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header>
    </header>


    <main class="container">


        <form action="registrarProductos.php" method="POST">
            <h1>Registro De Productos</h1>

            <div class="row">
                <div class="col">
                    <label class="col-form-label">Nombre de producto</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                </div>
                <div class="col">
                <label class="col-form-label">Marca del Juguete</label>
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
                </div>
            </div>
            <button type="submit" class="btn btn-info btn-block mt-4" name="botonEnvio">Registrar</button>
        </form>
    </main>




    <footer>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
</body>

</html>