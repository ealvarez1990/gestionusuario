<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Alta</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
      <a href="../index.php"><h2>Manage User</h2></a>
  </div>
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" action="phpAlta.php" method="post">
      <p>Introduce tus datos en los siguientes campos</p>
      <input name="email" type="text" class="form-control1" placeholder="correo@correo.com" autofocus="">
      <input name="alias" type="text" class="form-control1" placeholder="Alias" autofocus="">
      <input name="clave" type="password" class="form-control1" placeholder="Clave" autofocus="">
      <input name="fecha" type="hidden" class="form-control1">
      
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
      <div class="registration">
          Si ya estas registrado.
          <a class="" href="../index.php">
              Ir a LOGIN
          </a>
      </div>
  </form>
        <?php include '../paginas/footer.php';?>
