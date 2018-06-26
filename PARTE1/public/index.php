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
        <?php
            //Ejemplo de uso de modelos
            $tabla = new Table();

            $evento = new Evento();
            $listado = $evento->listarEventos();
            var_dump ($listado->num_rows);
            foreach ($listado as $even){
                echo "Nombre: " . $even['Nombre'] . "<br>";
            }

            



        ?>



    </body>
</html>
