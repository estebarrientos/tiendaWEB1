<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

       
        $id=$_GET["id"];

        
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $precio=$_POST['precioEditar'];

        
        $transaccion= new BaseDatos();

        
        $consultaSQL="UPDATE productos SET nombre='$nombre',descripcion='$descripcion', precio='$precio' WHERE id_producto='$id'";

        
        $transaccion->editarDatos($consultaSQL);


    }







?>