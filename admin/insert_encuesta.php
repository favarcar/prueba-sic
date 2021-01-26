<?php
include('cone.php');

if (isset($_POST['guardar'])){
	$documento = $_POST['documento'];
	$email = $_POST['email'];
	$coment = $_POST['coment'];
	$marca = $_POST['marca'];
	
	
mysqli_query( $cone,"INSERT INTO encuesta (Documento, Email, Comentarios, Id_marca) values ('$documento', '$email', '$coment', '$marca')") or Die(mysqli_error($cone));

echo "Se ha agregado en nuevo la encuesta a la tabla, sus valores son:
</br>
Documento: $documento </br>
Email: $email </br>
Comentarios: $coment </br>";
echo '<a href="main.php?key=1" class="btn btn-primary"><i class="fa fa-plus"></i>Enviar otra encuesta</a>';
}
else{
echo "no se enviaron datos";
}
	?>

