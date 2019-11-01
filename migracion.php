<?php include 'autoload.php';
include 'validacion.php';
$usuDB=$conexion->leer($DB);
$usuJson=BaseDeDatos();
if (count($usuJson)>count($usuDB)) {
  header("location:migrar.php");
}
// var_dump($usuJson);
// echo "<br>";
// var_dump($usuDB);
session_start();
 ?>
