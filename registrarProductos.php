<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        
       
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $descripcion=$_POST["descripcion"];
        $precio=$_POST["precio"];
        $foto=$_POST["foto"];

        $transaccion=new BaseDatos();

        
        $consultaSQL="INSERT INTO productos(nombre,marca,descripcion,precio,foto) VALUES ('$nombre','$marca','$descripcion','$precio','$foto')";

        
     
        $transaccion->agregarDatos($consultaSQL);

        if($transaccion){
            header("location:index.php");
        }

    }





?>