<?php
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Administrador</title>
</head>
<body class="different">
    <div class="logoutBtn">
        <form action="logout.php" method="post">
            <button class="boton" type="submit">Cerrar sesión</button>
        </form>
    </div>
    <div class="administrador">
        <h1>Bienvenido Administrador</h1>
        <button class="boton" id="list">Listar archivos</button>
        <button class="boton" id="upload">Subir archivo</button>
        <button class="boton" id="delete">Borrar archivo</button>
        <br>
        <div class="table">
            <?php
            $archivos = glob(DIR_UPLOAD . "*");
            ?>
            <table>
                <tr>
                    <th>Nombre del Archivo</th>
                    <th>Tamaño del Archivo (KB)</th>
                    <th>Borrar</th>
                </tr>
                <?php
                foreach ($archivos as $archivo) {
                    $nombreArchivo = basename($archivo);
                    $tamañoArchivoKB = round(filesize($archivo) / 1024, 2);
                ?>
                <tr>
                    <td><a href='mostrar_archivo.php?nombre=$nombreArchivo' target='_blank'><?php echo $nombreArchivo; ?></a></td>
                    <td><?php echo $tamañoArchivoKB; ?> KB</td>
                    <td><button onclick="borrarArchivo('$nombreArchivo')\">Borrar</button></td>
                </tr>
                <?php } ?>

            </table>
        </div>
    </div>
</body>
</html>
