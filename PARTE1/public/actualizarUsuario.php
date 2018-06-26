<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Daw\models\Table;
    use Daw\models\Evento;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pagina home del proyecto</title>
    </head>
    
    <body>
        
        <div id="tabla1">
        <table>

            <thead>
                <tr> <td>ID</td> <td>Nombre</td> <td>Apellido</td> <td>Edad</td> <td>Curso</td> <td>Correo</td> <td>Puntuación</td></tr>
            </thead>

            <tbody>
            
            
            <?php

                $evento = new Evento();
                $listado = $evento->listarEventos();

                foreach($listado as $fila){
                    echo "<tr class='lineas'>". "<td>". $fila['id']. "</td>". "<td>". $fila['Nombre']. "</td>". "<td>". $fila['Apellido']. "</td>". "<td>". $fila['Edad']. "</td>".  "<td>". $fila['Curso']. "</td>". "<td>". $fila['Correo']. "</td>". "<td>". $fila['Puntuacion']. "</td>". "<td>". "<a href='#' onclick='actualizar(".$fila['id']. ",". "'". $fila['Nombre']. "'". ",". "'". $fila['Apellido']. "'". ",". $fila['Edad']. ",". "'". $fila['Curso']. "'". ",". "'". $fila['Correo']. "'".")'>Modificar</a>" . "</td>"."</tr>";
                }
                   
            ?>
            <a href=""></a>
            </tbody>
        </table><!-- fin de la tabla 1 para estructurar la consulta de php -->
        </div>
        
        <form action="" id="form_modificarUsu" style="display:none">
            <input type="text" name="id" id="id" value="">
        </form>  
        
        
        
        
        <script type="text/javascript">
        
            function actualizar(id, nombre, apellido, edad, curso, correo){
                document.getElementById('form_modificarUsu').style.display='block';
            }
        
        </script>
    </body>
</html>