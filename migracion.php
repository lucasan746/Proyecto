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
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Se migraron los usuarios</h1>
   </body>
 </html>
