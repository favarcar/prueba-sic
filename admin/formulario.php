<?php 
//generar listado de marcas
$sql = mysqli_query($cone,"SELECT * from marca_pc");
$row_sql = mysqli_fetch_assoc($sql);
?>
  <h1>Agregar encuesta</h1>
  
<form action="main.php?key=2" method="post" >
  
<label for="documento">Documento</label>
<input name="documento" class="form-control" type="number"class="form-control" required></input>
  
<label for="email">Email</label>
<input id="email" name="email" class="form-control" type="email"class="form-control" required ></input>

<label for="coment">Comentarios</label>
<textarea name="coment" class="form-control"></textarea>

<label for="marca">Marca favorita</label>
 <?php 
 echo
 
 '<select name="marca" class="form-control">
 <option value=""> Elige una marca</option>';
  
  do
  {
     echo '<option value="'.$row_sql["Id_marca"].'">'.$row_sql["Marca"].'</option>'; 
  }while($row_sql = mysqli_fetch_assoc($sql));
  
  echo '</select>';
  ?>

<button name="guardar" type="submit" class="btn btn-primary">Enviar encuesta</button>

</form>