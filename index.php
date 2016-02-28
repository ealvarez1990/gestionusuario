<?php
require './require/comunIndex.php';
$bd = new BaseDatos();
$sesion = new Session();
if ($sesion->isLogged()) {
    $sesion->sendRedirect("redireccion/phpredireccion.php");
    exit();
}
?>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
      <a href="#"><h2>Manage User</h2></a>
  </div>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
      <form method="POST" action="login/phplogin.php">
		<input name="email" type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input name="clave" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		<div class="login-social-link">
          <a href="index.html" class="facebook">
              Facebook
          </a>
          <a href="index.html" class="google">
              Google+
          </a>
        </div>
		<ul class="new">
			<li class="new_left"><p><a href="#">Olvidaste tu contraseña ?</a></p></li>
                        <li class="new_right"><p class="sign">¿Eres nuevo ?<a href="login/alta.php"> Date de Alta</a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
<div class="copy_layout login register">
      <p>Copyright &copy; Eduardo Álvarez Bravo</p>
   </div>
</body>
</html>

