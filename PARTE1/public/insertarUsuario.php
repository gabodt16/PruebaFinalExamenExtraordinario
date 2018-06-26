<?php
    require_once __DIR__.'/../vendor/autoload.php';
    use Daw\models\Table;
    use Daw\models\Evento;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    
    <body>
      
      
        <h1>Regístrate</h1>
       
       <div class="formulario">
           
            <form action="insertarUsuario.php?insertar=true" method="post">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" autofocus required>

                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" required>
                <br><br>

                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" required>

                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" required>
                <br><br>
                
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" required>
                <br><br>
                

                <input type="submit" value="Enviar" onclick="insertar()">

            </form>
        </div>
        
        
        
        <a href="muestraUsuario.php" >Buscar a un usuario</a>
        <a href="actualizarUsuario.php">Actualizar a un usuario</a>
        <a href="borrarUsuario.php">Borrar Usuarios</a>
        <a href="listadoUsuarios.php?listado=true">Ver todos los usuarios</a>
      
      
      
      
      
      
      
      
      
      
      
      
      
      <!-- 
       
        <h1>HOLAAAA VALEEEEE!!!!!!!</h1>
       
       
        <a href="#" onclick="actual(1,'gabriel','de toni', 21, 'DAW', 'gabrieldt26es@gmail.com')">MODIFICAR</a>
        
        
        <form action="" id="form_modificarUsu" style="display:none">
            <input type="text" name="id" id="id" value="" style="display:none">
            
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" >
            <br><br>
                            
            <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" >
                <br><br>

                <label for="edad">Edad</label>
                <input type="text" name="edad" id="edad" > <br><br>

                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" >
                <br><br>
                
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" >
                <br><br>
                

                <input type="submit" value="Enviar" onclick="insertar()">
        </form>  
        
        
        
        
        <script type="text/javascript">
        
            function actual(id, nombre, apellido, edad, curso, correo){
                document.getElementById('form_modificarUsu').style.display='block';
                
                
                document.getElementById('id').value=id;
                document.getElementById('nombre').value=nombre;
                document.getElementById('apellido').value=apellido;
                document.getElementById('edad').value=edad;
                document.getElementById('curso').value=curso;
                document.getElementById('correo').value=correo;
                
                console.log(id, nombre, apellido, edad, curso, correo);
                
            }
        
        </script>
        
        
         -->
    </body>
</html>