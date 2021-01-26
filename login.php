<?php
session_start();
if (isset( $_POST['enviar'] )) {
$nombre = $_POST['Usuario'];
$contra = sha1($_POST['Pass']);

include ('admin/cone.php');

$consulta = ("SELECT * FROM usuarios WHERE User = '$nombre' AND Pass = '$contra'");

$datos = mysqli_query($cone,$consulta);
$numDatos = mysqli_num_rows($datos);



if ($numDatos <= 0) {

header("Location: index.php?error=1"); // registro 0, campo 3, que será la página personal del usuario


} else {


echo "Es correcto";
$_SESSION['Admini'] = $nombre;


header("Location: admin/main.php?key=0"); // registro 0, campo 3, que será la página personal del usuario

mysqli_free_result($consulta);
}
}
ob_end_flush()

?>
