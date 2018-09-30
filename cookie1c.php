<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.4</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE['nombre'])){
            echo "La cookie tiene el valor: ".$_COOKIE['nombre'];
        } else {
            echo "La cookie no ha podido ser encontrada :(";
        }
    ?>
    <a href="cookie1d.php">Borrar Cookie</a>
</body>
</html>