<?php

require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$gestor = new ManejoUsuario($bd);
$email = Request::post("email");
$clave = Request::post("clave");
$alias = Request::post("alias");
$fecha_alta = Server::getRequestDate('FH');
$activo =0;
$personal = 0;
$administrador=0;

if($activo==null){ 
    $activo=0;
}
if($administrador==null){
    $administrador=0;
}
if($personal==null){
   $personal=0;
}


$usuario=$gestor->get($email);

if($usuario->getEmail()==$email){
     header("Location:../error/error.php?mensaje=Este usuario ya esta dado de alta"); 
}else{
   $usuario = new Usuario($email, sha1($clave), $alias, $fecha_alta, $activo, $personal, $administrador);
   $gestor->insert($usuario);
   $bd->close();
   $mensaje=$bd->getError();

 header("Location:../activacion/correo.php?email=$email"); 
}


