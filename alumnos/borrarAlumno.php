<?php
    require "../instituto.php";
    session_start();
    
    if($_GET){
        $alumnos = $_SESSION["alumnos"];
        $dni = $_GET["dni"];

        $posicion = 0;
        $borrado = false;
        foreach($alumnos as $alumno){

            if($dni == $alumno->getDni()){
                $borrado = true;  
                                   
            }

            if($borrado){                
                if($alumnos[$posicion+1] != null){  
                    $alumnos[$posicion] = $alumnos[$posicion+1];  
                }
            }
            
            $posicion++;
        }

        unset($alumnos[$posicion-1]);   

        $_SESSION["alumnos"] = $alumnos;
        header('Location: alumnos.php');
    }
    
?>