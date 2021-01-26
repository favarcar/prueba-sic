<?php
$cone = mysqli_connect("localhost", "prueba_sic", "1234", "prueba_sic");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
