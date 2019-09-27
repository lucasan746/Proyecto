<?php include 'validacion.php';
$listusus=BaseDeDatos();
unset($listusus[0]);
rsort($listusus);
$user=array_search("Lucasanchez",array_column($listusus,'usuario'));
var_dump($user);
var_dump($listusus[4]);
 ?>
