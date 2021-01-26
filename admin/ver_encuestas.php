<?php
$encuesta = mysqli_query($cone,"SELECT * FROM encuesta"); 
$row_encuesta = mysqli_fetch_array($encuesta);

echo '
<h3 align="center">Listado de encuestas</h3>
<table class="table">
  <thead>
  <tr>
    <th>Documento</th>
    <th>Email</th>
    <th>Comentarios</th>
    <th >Marca</th>
	 <th >Fecha registro</th>
	<th> Acciones </th>
    </tr>
  </thead>
  <tbody>';
  
  do{
echo '<tr>
    	<td>'.$row_encuesta['Documento'].'</td>
    	<td>'. $row_encuesta['Email'].'</td>
    	<td>'.$row_encuesta['Comentarios'].'</td>
    	<td>'.consulta_campo("marca_pc","Id_marca",$row_encuesta['Id_marca'],"Marca").'</td>
		<td>'.fecha($row_encuesta['Fecha_respuesta']).'</td>
		<td><a href="javascript:borrado('.$row_encuesta['Id_encuesta'].',\'encuesta\',\'Id_encuesta\',3)" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a></td>
    	        
  </tr>';
}while ($row_encuesta = mysqli_fetch_assoc($encuesta));

echo '</tbody>
</table>
';


?>