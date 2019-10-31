<?php
include_once 'autoload.php';
include_once 'validacion.php';

$usuariosarray=BaseDeDatos();

foreach ($usuariosarray as $key => $us) {
    if ($conexion->buscarPorEmail($us["email"],$DB,"usuarios")) {
    }
    else {
      $reg=new ArmarRegistro;
      $usuario=$reg->armarUsuario($us,$us["FotoDePerfil"],$us["Nacimiento"]);
      $conexion->guardarUsuario($DB,$usuario);
    }
  }
  header("location:index.php");
 ?>
