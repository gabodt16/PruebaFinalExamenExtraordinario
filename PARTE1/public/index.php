<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Daw\models\Tabla;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pagina home del proyecto</title>
    </head>
    
    <body>
        <?php
            //Ejemplo de uso de modelos
            $tabla = new Tabla();

            /*$listado = $tabla->InsertarEquipos("eduardo", 8);
            var_dump ($listado->num_rows);
            foreach ($listado as $even){
                echo "Nombre: " . $even['nombre'] . "<br>";
            }
*/

        ?>
        
        <h1>Crea Tu equipo</h1>
       
        <div class="formulario">
           
            <form action="pagina.php" method="post">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" autofocus required>

                <label for="participantes">Participantes</label>
                <input type="number" max="5" min="0" name="participantes" id="participantes" required>
                <br><br>

                <input type="submit" value="Enviar">

            </form>
        </div>
        
        <a href="listado.php">Listado de equipos</a>


    </body>
</html>
