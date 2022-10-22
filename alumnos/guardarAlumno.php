<?php
        session_start();
        require "../instituto.php";
        
        if($_POST){
            
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $dni = $_POST["dni"];
            $direccion = $_POST["direccion"];
            $email = $_POST["email"];

            $alumno = new alumno($nombre,$apellidos,$dni,$direccion,$email); 

            $alumnos = $_SESSION["alumnos"];          
 
            array_push($alumnos,$alumno);               

            $_SESSION["alumnos"] = $alumnos;           

            header('Location: alumnos.php');
            
        }
    ?>