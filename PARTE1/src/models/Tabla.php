<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Tabla extends Db{

    function __construct(){
        parent::__construct();
    }
    
    function listarEquipos(){
        $consulta = "SELECT * FROM equipo";
        $listadoEquipo = parent::realizarConsultas($consulta);
        return $listadoEquipo;
    }

    function InsertarEquipos($nombre, $participantes){
        
        if(isset($nombre, $participantes)){
            $consulta = "INSERT INTO equipo (nombre, participantes) VALUES('".$nombre."', '".$participantes."')";
            $listadoEquipo = parent::realizarConsultas($consulta);
            if($listadoEquipo==true){
                return parent::realizarConsultas("select * from equipo order by id desc limit 1");
            }
        }else{
            return false;
        }
    }
}

?>
