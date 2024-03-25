<?php

// Root de la aplicación a partir de http://localhost/
define("APP_ROOT", "/File-Manager/a/");

// Ruta física de la aplicación
define("APP_PATH", "C:/wamp64/htdocs/File-Manager/");

// Directorio donde se van a subir los archivos
define("DIR_UPLOAD", "C:/wamp64/archivos_subidos/");

// Extensiones de archivos con su correspondiente content-type.
$CONTENT_TYPES_EXT = [
    "jpg" => "image/jpeg",
    "jpeg" => "image/jpeg",
    "gif" => "image/gif",
    "png" => "image/png",
    "json" => "application/json",
    "pdf" => "application/pdf",
    "bin" => "application/octet-stream"
];
