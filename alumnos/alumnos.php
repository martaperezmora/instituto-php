<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alumnos</title>
</head>
<body>
<h1>Alumnos</h1>
    <section>
        <a href="alumnoAlta.html">añadir</a>
        <br>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>DNI</th>
                <th>Dirección</th>
                <th>email</th>
                <th></th>
            </tr>
            <?php
                require "../instituto.php";
                session_start();
                
                $alumnos = $_SESSION["alumnos"];

                    foreach($alumnos as $alumno){
                        echo "<tr>
                                <td>".$alumno->getNombre()."</td>
                                <td>".$alumno->getApellidos()."</td>
                                <td>".$alumno->getDni()."</td>
                                <td>".$alumno->getDireccion()."</td>
                                <td>".$alumno->getEmail()."</td>
                                <td>
                                    <a href='alumnoMod.php?dni=".$alumno->getDni()."'>editar</a>
                                    <a href='borrarAlumno.php?dni=".$alumno->getDni()."'>borrar</a>
                                </td>
                            </tr>";
                    } 
            ?>
        </table>
    </section>
</body>
</html>