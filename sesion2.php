<?php
session_start();
if(isset($_SESSION['contador'])){
    $_SESSION['contador']++;//con esto se incrementa una unidad al contador
} else {
    $_SESSION['contador'] = 1;
}
echo "Nos has visitado: ".$_SESSION['contador']." veces.";
?>