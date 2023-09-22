<?php

$usuario = $_POST["usuario"];

$password = $_POST["pass"];

$ckusuario="Florencia Rodriguez";
$ckpassword= 1234;

if ($usuario==$ckusuario && $password==$ckpassword) {
    header("location: https://github.com/FlorenciaRodriguez0984") ;
} 
else {
    echo "Error en usuario y/o password";
    header ("location: https://www.404error.com.ar/:");
}

?>