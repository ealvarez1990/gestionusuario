<?php
require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$modelo = new ManejoUsuario($bd);
$usuario = new Usuario();
$usuarios = $modelo->getList();
$sesion = new Session();

if (!$sesion->isLogged()) {
    header("Location: ../redireccion/phpredireccion.php");
    exit();
} else {
    if ($sesion->getUser()->getAdministrador() != 1 || $sesion->getUser()->getActivo() != 1) {
        header("Location: ../redireccion/phpredireccion.php");
    } else {
        ?>
        <!DOCTYPE HTML>
        <html>
            <head>
                <title>Admin</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                <!-- Bootstrap Core CSS -->
                <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
                <!-- Custom CSS -->
                <link href="../css/style.css" rel='stylesheet' type='text/css' />
                <!-- Graph CSS -->
                <link href="../css/lines.css" rel='stylesheet' type='text/css' />
                <link href="../css/font-awesome.css" rel="stylesheet"> 
                <!-- jQuery -->
                <script src="../js/jquery.min.js"></script>
                <!----webfonts--->
                <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
                <!---//webfonts--->    
                <!-- Nav CSS -->
                <link href="../css/custom.css" rel="stylesheet">
                <!-- Metis Menu Plugin JavaScript -->
                <script src="../js/metisMenu.min.js"></script>
                <script src="../js/custom.js"></script>
                <!-- Graph JavaScript -->
                <script src="../js/d3.v3.js"></script>
                <script src="../js/rickshaw.js"></script>
            </head>
            <body>
                <div id="wrapper">
                   <?php include '../paginas/nav.php'; ?>
                <div id="page-wrapper">
                    <div class="graphs">
                        <div class="col_3">
                            <div class="col-md-3 widget widget1">
                                <span><h3><i class="fa fa-user">&nbsp;</i>Usuario:&nbsp;<?= $sesion->getUser()->getAlias(); ?> </h3></span>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="col-md-3 widget widget1">
                                <?php
                                $op = Request::get("op");
                                $r = Request::get("r");

                                if ($r == null) {
                                    $r = "Ninguno";
                                    echo '<span class="alert-success">Operacion: ' . $op . ' Errores: ' . $r . '</span>';
                                } else {
                                    echo '<span class=" alert-warning">Operacion: ' . $op . ' Errores: ' . $r . '</span>';
                                }
                                ?> 
                                <div class="clearfix"> </div>
                            </div>
                            <div class="content_bottom">
                                <div class="col-md-12 span_3">
                                    <div class="bs-example5" data-example-id="contextual-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Clave</th>
                                                    <th>Alias</th>
                                                    <th>Fecha Alta</th>
                                                    <th>Activo</th>
                                                    <th>Personal</th>
                                                    <th>Admin</th>
                                                    <th>Editar</th>
                                                    <th>Borrar</th>
                                                    <th>Activar</th>
                                                    <th>Desactivar</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($usuarios as $key => $usuario) {
                                                    if ($usuario->getActivo() == 0) {
                                                        echo '<tr class="alert-danger">';
                                                    } else {
                                                        ?>
                                                        <tr class="active">
                                                            <?php
                                                        }
                                                        ?>
                                                        <td class="row"><span><?= $usuario->getEmail(); ?></span></td>
                                                        <td class="row"><?= $usuario->getClave(); ?></td>
                                                        <td class="row"><?= $usuario->getAlias(); ?></td>
                                                        <td class="row"><?= $usuario->getFecha_alta(); ?></td>
                                                        <td class="row"><?= $usuario->getActivo(); ?></td>
                                                        <td class="row"><?= $usuario->getPersonal(); ?></td>
                                                        <td class="row"><?= $usuario->getAdministrador(); ?></td>
                                                        <td class="row"><a href="editar.php?email=<?= $usuario->getEmail(); ?>"><i class="fa fa-edit"></i></a></td>
                                                        <td class="row"><a href="phpborrar.php?email=<?= $usuario->getEmail(); ?>"><i class="fa fa-eraser"></i></a></td>
                                                        <?php
                                                        if ($usuario->getActivo() == 1) {
                                                        ?>
                                                        <td class="row"><i class="fa fa-unlock-alt"></i></td>
                                                        <td class="row"><a href="phpdesactivar.php?email=<?= $usuario->getEmail(); ?>"><i class="fa fa-lock"></i></a></td>
                                                         <?php       
                                                            }else{
                                                        ?>
                                                         <td class="row"><a href="phpactivar.php?email=<?= $usuario->getEmail(); ?>"><i class="fa fa-unlock-alt"></i></a></td>
                                                         <td class="row"><i class="fa fa-lock"></i></td>
                                                    </tr>
                                                    <?php
                                                            }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       <?php
        include '../paginas/footer.php';
    }
}?>