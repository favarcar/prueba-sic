
<?php
$id_dato = $_GET['Id_dato'];
$tabla = $_GET['Tabla'];
$clave = $_GET['Clave'];
$backey = $_GET['Anterior'];


mysqli_query($cone,"DELETE FROM $tabla WHERE $clave = '$id_dato'") or  die(mysqli_error($cone));

echo '<h>El Registro se ha eliminado</h>';
echo '<p class="regnorm">
<a href="main.php?key='.$backey.'" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Regresar</a></p>';
?>
