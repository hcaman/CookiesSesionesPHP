<?php
$nombre = $_POST['nombre'];
setcookie('nombre', $nombre, time()+4800);

?>