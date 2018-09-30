<?php
if (isset($_COOKIE['contador'])){
    setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
    echo "Numero de visitas: ".$_COOKIE['contador'];
} else {
    setcookie('contador', 1, time()+365*24*60*60); //se puede poner el calculo matematico de 1 anio, y no cambia nada si se hace de una forma u otra.
    echo "Bienvenido por primera vez a nuestra pagina";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>