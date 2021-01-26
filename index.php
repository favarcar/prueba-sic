<!DOCTYPE html>
<?php ini_set('display_errors', 1);
error_reporting(E_ALL);?>
<?php
include("admin/cone.php");
 ?>
<html>

<head>

  <meta charset="UTF-8">

  <title>Prueba SIC - Ingreso</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="container">

  <div id="login-form">
<p align="center"><img src="admin/vista/images/escudo.png" width="300" align="middle"></p>
<h3>Ingreso a Prueba</h3>

    <fieldset>

      <form action="login.php" method="POST">

        <input type="text" value="Usuario" onBlur="if(this.value=='')this.value='Usuario'" onFocus="if(this.value=='Usuario')this.value='' " required name="Usuario" id="Usuario"> <!-- JS because of IE support; better: placeholder="Email" -->

        <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' " name="Pass" id="Pass"> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" value="Ingresar" name="enviar">

        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Olvide la contraseña</a></p>
<?php 						
							if(isset($_GET['error']) == 1){
							echo '<div style="color:red;" class="alert alert-warning">Usuario o Contraseña incorrectos. Por favor intentelo de nuevo</div>';								
							   }	
							?>
        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>

</body>

</html>