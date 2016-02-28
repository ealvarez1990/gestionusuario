<?php
require '../clases/AutoCarga.php';
$bd = new BaseDatos();
$sesion = new Session();
if ($sesion->isLogged()) {
    $sesion->destroy();
    exit();
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>LOGIN</title>
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
        <style>
            #mo{
                display: none;
            }
           #elementoI{
               margin-left: 20%
            }
            
            h2{
                width: 90%;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"ERROR</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                                <strong>Settings</strong>
                            </li>

                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'Search...';
                            }">
                </form>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a class="navbar-brand" href="../index.php"ERROR><i class="fa fa-dashboard fa-fw nav_icon"></i>INDEX</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="col_3">
                        <div class="col-md-3 widget widget1">
                            <div>
                                <h2>PAGINA DE ERROR&nbsp</h2>
                            </div>
                            <br>
                            <i id="elementoI" class="fa fa-5x fa-ban"></i>
                            <br>
                            <div class="col-md-12"><h1><?= $_GET["mensaje"] ?></h1>
                                <span id="mo" style="display:<?= $_GET["display"] ?>">Login incorrecto o no registrado para hacerlo pulse <a href="../login/alta.php">aquí</a></span>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy">
                <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>

            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>


