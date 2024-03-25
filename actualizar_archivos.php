<?php
require "config.php";

$archivos = glob(DIR_UPLOAD . "*");

echo "<table>";
echo "<tr><th>Nombre del Archivo</th><th>Tamaño del Archivo (KB)</th><th>Borrar</th></tr>";

foreach ($archivos as $archivo) {
    $nombreArchivo = basename($archivo);
    $tamañoArchivoKB = round(filesize($archivo) / 1024, 2);
    echo "<tr>";
    echo "<td><a href='mostrar_archivo.php?nombre=" . urlencode($nombreArchivo) . "' target='_blank'>" . htmlspecialchars($nombreArchivo) . "</a></td>";
    echo "<td>" . htmlspecialchars($tamañoArchivoKB) . " KB</td>";
    echo "<td><button class='boton' onclick='borrarArchivo(this.parentNode.parentNode, \"" . htmlspecialchars($nombreArchivo) . "\")'>Borrar</button></td>";
    echo "</tr>";
}

echo "</table>";
?>
