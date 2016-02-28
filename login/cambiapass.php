<?php
require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$modelo = new ManejoUsuario($bd);
$usuario = $modelo->get(Request::get("email"));
$sesion = new Session();
if (!$sesion->isLogged()) {
header("Location: ../redireccion/phpredireccion.php");
exit();
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
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" method="post" action="phppassword.php">
                                <div class="form-group"></div>
                                <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Clave</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="clave1" value="<?= $sesion->getUser()->getClave() ?>" class="form-control1" id="inputPassword" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="repitPassword" class="col-sm-2 control-label">Repita la clave</label>
                                    <div class="col-sm-8">
                                        <input type="password" name="clave2" value="" class="form-control1" id="repitPassword" placeholder="Password" >
                                    </div>
                                </div>

                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input type="submit" class="btn-success btn">
                                            <input type="reset" class="btn-default btn">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /#page-wrapper -->
            </div>
                    <?php
        include '../paginas/footer.php';
    }
?>
