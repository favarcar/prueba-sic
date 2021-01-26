<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".insert-modal"><i class="fa fa-plus"></i>Nueva marca</button>

<?php if (isset($_POST['insertar'])){
	$nuevoval = $_POST['Nuevo'];
$sql = mysqli_query($cone,"SELECT * FROM marca_pc Where Marca = '$nuevoval'");
$total = mysqli_num_rows($sql);

if ($total > 0){
	echo '<p class="alert alert-danger">Esta marca ya existe: '.$nuevoval.'</p>';
}
else {
mysqli_query($cone,"INSERT INTO marca_pc (Marca) values ('$nuevoval')") or Die(mysqli_error($cone))  ;
echo '<p class="alert alert-success">La marca se ha agregado exitosamente</p>';
	}
	}
	?>
</p>
<p>
  <?php
$sql_actual = mysqli_query($cone,"SELECT * FROM marca_pc");
$row_sql_actual = mysqli_fetch_array($sql_actual);
?>


<div class="x_panel">
<div class="x_title">
                    <h2>marcas<small> Definidas actualmente</small></h2>
                    <div class="clearfix"></div>

  </div>



<div class="x_content">

<table  class="table" >
  <thead>
  <tr>
    <td><strong>Nombre</strong></td>
    <td><strong>Acciones</strong></td>
  </tr>
  </thead>
  <tbody>
  <?php do { ?>
  <tr>
    <td><?php echo $row_sql_actual['Marca']; ?></td>
    <td><a href="javascript:borrado(<?php echo $row_sql_actual['Id_marca'];?>,'marca_pc','Id_marca',<?php echo $verpag; ?>)" class="btn btn-danger">Eliminar</a></td>
    </tr>
    <?php } while ($row_sql_actual = mysqli_fetch_assoc($sql_actual))?>
<tbody>
</table>
</div>


<!-- Large modal -->
										 <div class="modal fade insert-modal" tabindex="-1" role="dialog" aria-hidden="true">
									 <div class="modal-dialog modal-lg">
										 <div class="modal-content">

											 <div class="modal-header">
												 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
												 </button>
												 <h4 class="modal-title" id="myModalLabel"><h2>Nueva marca</h2></h4>
											 </div>
											 <div class="modal-body">
												 <form action="" role="form" method="post" name="form1" id="form1" style="display:<?php echo $visible; ?>">
												 <div class="form-group col-md-7">
													  <label for="Nuevo">Nombre de la marca</label>
												    <input type="text" name="Nuevo" value="" size="32" id="Nuevo" class="form-control" required  />
												    <input name="insertar" type="submit" id="insertar" value="Ingresar" class="btn btn-primary" />
												 </div>

											 </div>
											 <div class="modal-footer">
												 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

											 </div>
</form>
										 </div>
									 </div>
								 </div>
<!-- Fin de modal -->

<?php
mysqli_free_result($sql_actual);
?>
