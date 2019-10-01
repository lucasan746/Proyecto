<?php include 'validacion.php';
$datos=[];
$datos["usuario"]="Phoebe";
$datos["contraseña"]="asdasdasd";

$listusus=BaseDeDatos();
var_dump($listusus);
rsort($listusus);
$user=array_search($datos["usuario"],array_column($listusus,'usuario'));
if ($listusus[$user]["usuario"]==$datos["usuario"]&&password_verify($datos["contraseña"],$listusus[$user]["contrasenia"])) {
  $ts="asf";
}
else {
  $ts="no";
}

 ?>
