<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asignaturas</title>
</head>
<body>
<h1>Asignaturas</h1>
    <section>
        <a href="asignaturaAlta.html">añadir</a>
        <br>
        <table>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th></th>
            </tr>
            <?php
                require "../instituto.php";
                session_start();
                
                $asignaturas = $_SESSION["asignaturas"];

                    foreach($asignaturas as $asignatura){
                        echo "<tr>
                                <td>".$asignatura->getCodigo()."</td>
                                <td>".$asignatura->getDescripcion()."</td>
                                <td>
                                    <a href='asignaturaMod.php?cod=".$asignatura->getCodigo()."'>editar</a>
                                    <a href='borrarAsignatura.php?cod=".$asignatura->getCodigo()."'>borrar</a>
                                </td>
                            </tr>";
                    } 
            ?>
        </table>
    </section>
</body>
</html>