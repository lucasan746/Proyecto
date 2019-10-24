<?php

class ArmarRegistro{

  static public function armarUsuario($datos,$imagen,$fecha)
  {
      $contraHash = password_hash($datos["contraseña"], PASSWORD_DEFAULT);
$usuario = new Usuario($datos["nombre"],$datos["apellido"],$datos["usuario"],$datos["email"],$contraHash,$datos["pais"],$datos["sexo"],$fecha,$imagen);
    return $usuario;
  }

  static public function fotoPerfil($imagen){
    $nombre = $_FILES["fotoperfil"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $_FILES["fotoperfil"]["tmp_name"];
    $rutaDestino = dirname(__FILE__);
    $rutaDestino = $rutaDestino."/fotos/";
    $nombreImg = uniqid();
    $rutaDestino = $rutaDestino.$nombreImg.".".$ext;
    move_uploaded_file ($archivoOrigen, $rutaDestino);
    return $nombreImg.".".$ext;
  }



}



 ?>
