<?php
    if($_POST){
        require "../instituto.php";
        session_start();
        $asignaturas = $_SESSION["asignaturas"];
         
        $codigo = $_POST["codigo"];           
        $descripcion = $_POST["descripcion"];     
       
        $codViejo = $_POST["codViejo"];  

        $posicion = 0;
        foreach($asignaturas as $asignatura){
            if($codViejo == $asignatura->getCodigo()){
                $asignatura->setCodigo($codigo);
                $asignatura->setDescripcion($descripcion);
                $asignaturas[$posicion] = $asignatura;  
                break;
            }
            $posicion++;
        }

        $_SESSION["asignaturas"] = $asignaturas;
        header('Location: asignaturas.php');
    }
?>