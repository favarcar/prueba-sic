<?php ini_set('display_errors', 1);
error_reporting(E_ALL);?>
<?php
include("cone.php");
include("funshow.php");
$verpag = $_GET['key'];
 ?>
<?php
if (!isset($_SESSION)) {
	  session_start();
	  }

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
// Se realiza el Log de Cerrado de Sesi�n del Usuario
	#$estado = "Cerro Sesi�n";

  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['Admini'] = NULL;
    //Borra la variable de sesion Admini
   $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}

header("Cache-control:private");
if($_SESSION['Admini']=="")
{
 header("Location: ../index.php");
 exit;
}  ?>

<script type="text/javascript">
          <!--
         function borrado(id, tabla, clave, key) {
           var answer = confirm("Esta a Punto de Eliminar este Dato, ¿Esta Seguro de Eliminarlo?")
          if (answer){
           alert("Dato eliminado")
          window.location.href="main.php?key=4&Id_dato="+id+"&Tabla="+tabla+"&Clave="+clave+"&Anterior="+key;
           }
          else{
         alert("Cancelado")
          }
     }
</script>

<html lang="en">
<head>
  <title>Prueba de SIC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="main.php?key=0">Menu inicial</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  
      <li class="dropdown">
	   <a class="dropdown-toggle" data-toggle="dropdown">Archivo<span class="caret"></span></a>
	    <ul class="dropdown-menu">
            <li><a href="main.php?key=1" >Registrar encuesta</a></li>
            <li><a href="main.php?key=3">Ver respuestas</a></li>
			<li><a href="main.php?key=5">Ver marcas de PC</a></li>
			<li><a href="<?php echo $logoutAction ?>"><i class="fa fa-sign-out pull-right"></i>Cerrar sesión</a></li>
	   </ul>
	   </li>
		   
      </ul>
      
    </div>
  </div>
</nav>
 <?php
 
 switch ($verpag){
 case 0:
 include('home.php');
 break;
 
 case 1;
 include('formulario.php');
 break;
 
 case 2:
 include('insert_encuesta.php');
 break;
 
 case 3:
 include('ver_encuestas.php');
 break;
 
  case 4:
 include('del_cladato.php');
 break;

 case 5:
 include('marcas_pc.php');
 break;
 
 
 };
 
?>
 
 
</div>

</body>
</html>