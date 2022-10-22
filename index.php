<?php
        require "instituto.php";
        session_start();
    
        if (!isset($_SESSION['alumnos'])) {
            $_SESSION["alumnos"] = array();
        }
        
        if (!isset($_SESSION['asignaturas'])) {
            $_SESSION["asignaturas"] = array();
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    
</head>
<body>
    <h1>Instituto</h1>
    <section>
        <ul>
            <li><a href="alumnos/alumnos.php">Alumnos</a></li>
            <li><a href="asignaturas/asignaturas.php">Asignaturas</a></li>
        </ul>
    </section>
</body>
</html>