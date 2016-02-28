<?php
require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$sesion = new Session();
$usuario= new Usuario();
$modelo= new ManejoUsuario($bd);
$clave1=  Request::post("clave1");
$clave2=  Request::post("clave2");

if($clave1!=$clave2){
    header("Location: cambiapass.php?mensaje=Las contraeñas no coinciden");
}else{
    $usuario=$sesion->getUser();
    $usuario->setClave($clave1);
    $modelo->set($usuario);
     
     header("Location: ../redireccion/phpredireccion.php");
}

