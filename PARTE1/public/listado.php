<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Daw\models\Tabla;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
       
       <div id="tabla1">
        <table>

            <thead>
                <tr> <td>Nombre</td> <td>Participantes</td></tr>
            </thead>

            <tbody>
        <?php
            
            $tabla = new Tabla();
        
            $listado = $tabla->listarEquipos();
            if($listado!==false){
                
                foreach ($listado as $fila){
                    echo "<tr class='lineas'>". "<td>". $fila['nombre']. "</td>". "<td>". $fila['participantes']. "</td>". "</tr>";
                }
            }else{
                echo "<h1>LA CAGASTE MARICO Y TODO SE TE JUE... A LA PUTA...</h1>";
            }

        ?>
        
        </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>  
        
    
                                
        <a href="index.php">Ve a casa pajarito</a>
    </body>
</html>