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
    

}

?>
