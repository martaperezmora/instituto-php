<?php
    if($_POST){
        require "../instituto.php";
        session_start();
        $alumnos = $_SESSION["alumnos"];

        $nombre = $_POST["nombre"];        
        $apellidos = $_POST["apellidos"];          
        $dni = $_POST["dni"];           
        $direccion = $_POST["direccion"];     
        $email = $_POST["email"];      
        $dniViejo = $_POST["dniViejo"];  

        $posicion = 0;
        foreach($alumnos as $alumno){
            if($dniViejo == $alumno->getDni()){
                $alumno->setNombre($nombre);
                $alumno->setApellidos($apellidos);
                $alumno->setDni($dni);
                $alumno->setDireccion($direccion);
                $alumno->setEmail($email);
                $alumnos[$posicion] = $alumno;  
                break;
            }
            $posicion++;
        }

        $_SESSION["alumnos"] = $alumnos;
        header('Location: alumnos.php');
    }
?>