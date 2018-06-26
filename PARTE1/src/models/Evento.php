<?php
namespace Daw\models;



/**
* Plantilla vacia de Db
*/
class Evento extends Db{

    function __construct(){
        parent::__construct();
    }
    
    //Función para mostrar el listado de eventos
    function listarEventos(){
        $consulta = "SELECT * FROM usuarios";
        $listadoEventos = parent::realizarConsultas($consulta);
        return $listadoEventos;
    }
    
    //Función para buscar a un usuario
    function buscarUsuario(id){
        $consulta = "SELECT * FROM usuarios WHERE id= " . $id . "";
        $buscarUsuario = parent::realizarConsultas($consulta);
        return $buscarUsuario;
    }
    
    
    //Función para insertar usuario 
    function insertarUsuario(nombre, apellido, edad, curso, correo){
        
        $consulta="INSERT INTO usuarios (Nombre, Apellido, Edad, Curso, Correo) VALUES('".$nombre."', '".$apellido."', '".$edad."', '".$curso."', '".$correo."')";
        
        $insertar = parent::realizarConsultas($consulta);
        return $insertar;
    }
    
    
    //Función para modificar un usuario 
    function actualizarUsuario(){
        
    }
    
    //Función para borrar usario
    function borrarUsuario(id){
        
        $consulta="DELETE FROM usuarios WHERE id = ".$id."";
        $eliminar = parent::realizarConsultas($consulta);
        return $eliminar;
    }
    

}

?>
