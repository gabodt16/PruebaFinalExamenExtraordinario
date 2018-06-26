<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;

//Creamos un nevo objeto de para la insercion de datos contra la tabla evento
$evento = new Evento();
$mensaje="";

//insertamos un nuevo Registro  or empty($_POST["dni"])
if(isset($_POST["dni"])){
    var_dump($_POST["dni"]);
    if(empty($_POST["dni"])){
        var_dump($_POST["dni"]);
        $mensaje = "Error, la variable dni no se encuentra definida o está vacía";
    }else{
        var_dump($_POST["dni"]);
        $mensaje= $evento->buscarAsistente($_POST["dni"]);
        var_dump($mensaje);
    }
}else{
    $mensaje = "Error, la variable dni no se encuentra definida o está vacía";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body style="padding:10px">
      <div class="w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <div class="w3-col w3-card-4" style="width:40%">
          <header class="w3-container w3-blue">
            <h2>Comprobacion</h2>
          </header>
          <div class="w3-container">
            <!--AQUI MOSTRAREMOS NUESTRO MENSAJE DE USUARIO QUE PUEDE PASAR O NO-->
            <p><?=$mensaje?></p>
            <!-------------------------------------------------------------------->
          </div>
        </div>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
  </body>
</html>
