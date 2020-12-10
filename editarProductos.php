<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

       
        $id=$_GET["id"];

        
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $precio=$_POST['precioEditar'];

        
        $transaccion= new BaseDatos();

        
        $consultaSQL="UPDATE productos SET nombre='$nombre',precio='$precio',descripcion='$descripcion' WHERE id_producto='$id'";

        
        $transaccion->editarDatos($consultaSQL);

        if($transaccion){
            header("location:index.php");
        }else{
            header("location:registrar.php");
        }


    }







?>