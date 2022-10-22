<?php
    require "../instituto.php";
    session_start();
    
    if($_GET){
        $asignaturas = $_SESSION["asignaturas"];
        $codigo = $_GET["cod"];

        $posicion = 0;
        $borrado = false;
        foreach($asignaturas as $asignatura){

            if($codigo == $asignatura->getCodigo()){
                $borrado = true;  
            }

            if($borrado){                
                if($asignaturas[$posicion+1] != null){  
                    $asignaturas[$posicion] = $asignaturas[$posicion+1];  
                }
            }
            
            $posicion++;
        }

        unset($asignaturas[$posicion-1]);   

        $_SESSION["asignaturas"] = $asignaturas;
        header('Location: asignaturas.php');
    }
    
?>