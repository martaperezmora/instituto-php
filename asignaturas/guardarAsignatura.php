<?php
        session_start();
        require "../instituto.php";
        
        if($_POST){
            
            $codigo = $_POST["codigo"];
            $descripcion = $_POST["descripcion"];
        
            $asignatura = new asignatura($codigo,$descripcion); 

            $asignaturas = $_SESSION["asignaturas"];          
 
            array_push($asignaturas,$asignatura);               

            $_SESSION["asignaturas"] = $asignaturas;           

            header('Location: asignaturas.php');
            
        }
    ?>