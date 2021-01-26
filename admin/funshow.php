<?php
//Funcion para consultar cualquier dato de cualquien tabla

function consulta_campo($table, $fieldq, $idvar,$fieldr){
	//tabla, campo de consulta, valor, campo de respuesta
 global $cone;
$sql = mysqli_query($cone,"SELECT * from $table WHERE $fieldq = '$idvar'");
$row_sql = mysqli_fetch_assoc($sql);
return $row_sql[$fieldr];
}

# Funcion para mostrar la fecha en formato Dia mes y Año formato español

function fecha($date)
{
    //formato fecha americana
$fecha2=date("d/m/Y H:i:s",strtotime($date));
//El nuevo valor de la variable: $fecha2="20-10-2008"
return $fecha2;

}

?>