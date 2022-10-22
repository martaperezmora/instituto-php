<?php
        if($_GET){
            require "../instituto.php";
            session_start();
            
            $dni = $_GET["dni"];
            $alumnos = $_SESSION["alumnos"];
            foreach($alumnos as $alumno){
                if($dni == $alumno->getDni()){
                    $alumnoSeleccionado = $alumno;  
                }
            }
        }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar alumno</title>
</head>
<body>
    <h1>Editar alumno</h1>
    <section>
        <form action="editarAlumno.php" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $alumnoSeleccionado->getNombre() ?>" required>
            <br>
            <label for="apellidos">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" value="<?php echo $alumnoSeleccionado->getApellidos() ?>" required>
            <br>
            <label for="dni">DNI: </label>
            <input type="text" name="dni" id="dni" value="<?php echo $alumnoSeleccionado->getDni() ?>" required>
            <input type="hidden" name="dniViejo" value="<?php echo $dni ?>">
            <br>
            <label for="direccion">Direccion: </label>
            <input type="text" name="direccion" id="direccion" value="<?php echo $alumnoSeleccionado->getDireccion() ?>" required>
            <br>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" value="<?php echo $alumnoSeleccionado->getEmail() ?>" required>
            <br>
            <input type="submit" value="aceptar">
        </form>
    </section>
   
</body>
</html>