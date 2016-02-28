<?php
require'../clases/AutoCarga.php';
$bd= new BaseDatos();
$gestor= new ManejoUsuario ($bd);
$clave=Request::get("clave");
$email=Request::get("email");

$usuario= $gestor->get($email);
$clave2=''.sha1($usuario->getEmail().Configuracion::SEED);

if($clave==$clave2){
        $usuario->setActivo("1");
        $gestor->set($usuario);
        header('Location:../index.php');
}else{
   header('Location:../error/error.php?mensaje=No existe el usuario');
}
    