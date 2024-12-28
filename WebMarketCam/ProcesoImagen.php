<?php
    // Proceso Imagen

    // Establecer carpeta de destino
    $destino = "ImagenProductos";
    // Controlar
    if (is_uploaded_file($_FILES["IMAG"]["tmp_name"])) {
        // Nombre Temporal
        $ArchivoTemporal = $_FILES["IMAG"]["tmp_name"];
        // Nombre Original
        $NombreArchivo= $_FILES["IMAG"]["name"];
        // Controlar Nombre Original
        $NombreArchivo= basename($NombreArchivo);
        // Si no existe la carpeta se crea
        if (!is_dir($destino)) {
            // crear carpeta destino
            mkdir($destino);
        } // endif
        // Fijar destino
        $DestinoArchivo = $destino."/".$NombreArchivo;
        // Mandar el archivo a destino
        move_uploaded_file($ArchivoTemporal,$DestinoArchivo);
    } else {
        // Mensaje error
        echo "<span>No se pudo subir el archivo</span><br />\n";
    } // endif
 ?>