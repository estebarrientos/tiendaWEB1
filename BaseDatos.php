<?php 

class BaseDatos{


public $usuarioBD="root";
public $passwordBD="";



public function __construct(){}



public function conectarBD(){

   
    $infoBD="mysql:host=localhost;dbname=jugueteria";

   
    try{

       
        $conexionBD=new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        return($conexionBD);

    }catch(PDOException $error){
        
        echo($error->getMessage());
    }

}

public function agregarDatos($consultaSQL){

    //1. Establecer una conexión con la BD
    $conexionBD=$this->conectarBD();
    
    //2. Peparar la consulta
    $consultaInsertarDatos=$conexionBD->prepare($consultaSQL);

    //3. Ejecutar la consulta
    $resultado=$consultaInsertarDatos->execute();

    //4. Verificar el resultado
    if($resultado){
        echo("se agrego el registro con éxito");
    }else{
        echo("Error agregando el registro");
    }
    
}

public function consultarDatos($consultaSQL){

    //1.Establecer la conexión
    $conexionBD=$this->conectarBD();

    //2. Preparar la consulta para agregar datos
    $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

    //3. Establecer como(En que formato) devolver los datos consultados
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //4. Ejecutar la consulta preparada
    $resultado=$consultaBuscarDatos->execute();

    //5. Retornar los datos consultados
    return($consultaBuscarDatos->fetchAll());
}

public function eliminarDatos($consultaSQL){

     //1. Establecer una conexión con la BD
     $conexionBD=$this->conectarBD();
    
     //2. Peparar la consulta
     $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
 
     //3. Ejecutar la consulta
     $resultado=$consultaEliminarDatos->execute();
 
     //4. Verificar el resultado
     if($resultado){
         echo("se eliminó el registro con éxito");
     }else{
         echo("Error eliminando el registro");
     }

}

public function editarDatos($consultaSQL){

     //1. Establecer una conexión con la BD
     $conexionBD=$this->conectarBD();
    
     //2. Peparar la consulta
     $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
 
     //3. Ejecutar la consulta
     $resultado=$consultaEditarDatos->execute();
 
     //4. Verificar el resultado
     if($resultado){
         echo("se editó el Producto");
     }else{
         echo("Error editando el producto");
     }



}



}



?>