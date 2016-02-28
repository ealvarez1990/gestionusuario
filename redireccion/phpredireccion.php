<?php
require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$sesion = new Session();
$usuario=new Usuario();

if (!$sesion->isLogged()) {
    header("Location: ../login/logout.php");
    exit();
} else{
    
    $usuario=$sesion->getUser();
    $admin=$usuario->getAdministrador();
    $personal=$usuario->getPersonal();
    $activo=$usuario->getActivo();
    if($activo!=1){
         header("Location: ../error/error.php?mensaje=Cuenta no activada");
    }else{
        if($admin==1){
        header("Location: ../administrador/admin.php");
    }else{
        if($personal ==1){
            header("Location: ../personal/personal.php");
        }else{
            header("Location: ../usuario/user.php");
        }
    }
    }
}