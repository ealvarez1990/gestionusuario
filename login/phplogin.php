<?php

require '../clases/AutoCarga.php';

$email = Request::post("email");
$clave = sha1(Request::post("clave"));
$bd = new BaseDatos();
$sesion = new Session();
$modelo = new ManejoUsuario($bd);
$usuario = $modelo->get($email);
$sesion->setUser($usuario);

var_dump($sesion->getUser()->getClave());


if (isset($usuario) && $clave==$sesion->getUser()->getClave()) {
       header("Location:../redireccion/phpredireccion.php");
} else {
    $sesion->destroy();
    $bd->close();
    header("Location:../error/error.php?display=block&mensaje=BAD LOGIN");
}
