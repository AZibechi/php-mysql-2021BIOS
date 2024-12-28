<!DOCTYPE html>
<html lang=es>
<head>
<?php
include "head.inc"
?>
	<title>Error</title>

</head>

<body>
<div class="alert">
  <fieldset>
    <legend>ATENCIÓN</legend>
    <?php
        $mensaje = $_GET["MSG"];
        echo "<p class='msjAtencion'>HA SURGIDO UN ERROR</p>\n";
        echo "<p class='msjCargado'>$mensaje</p>\n";
    ?>
</body>
</html>