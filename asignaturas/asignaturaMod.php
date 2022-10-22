<?php
        if($_GET){
            require "../instituto.php";
            session_start();
            
            $codigo = $_GET["cod"];
            $asignaturas = $_SESSION["asignaturas"];
            foreach($asignaturas as $asignatura){
                if($codigo == $asignatura->getCodigo()){
                    $asignaturaSeleccionada = $asignatura;  
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
    <title>editar asignatura</title>
</head>
<body>
    <h1>Editar asignatura</h1>
    <section>
        <form action="editarAsignatura.php" method="post">
            <label for="codigo">Código: </label>
            <input type="text" name="codigo" id="codigo" value="<?php echo $asignaturaSeleccionada->getCodigo() ?>" required>
            <input type="hidden" name="codViejo" value="<?php echo $codigo ?>">
            <br>
            <label for="descripcion">descripcion: </label>
            <input type="text" name="descripcion" id="descripcion" value="<?php echo $asignaturaSeleccionada->getDescripcion() ?>" required>
            <br>
            <input type="submit" value="aceptar">
        </form>
    </section>
</body>
</html>