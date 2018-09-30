<?php
$usuariook='pedro';
$passok='asd';

if($_POST['nombre'] == $usuariook && $_POST['pass'] == $passok){
    session_start();
    $_SESSION['verificado'] = "SI!";
    echo "Tienes acceso a la pagina privada";
    echo "<a href='sesion3c.php'> Ve a por ella !</a>";
} else {
    header ("Location: sesion3a.php?error=si"); //redirige a una pagina que le digamos
}
?>