<?php

class ArmarRegistro{

  static public function armarUsuario($datos,$imagen,$fecha)
  {
      $contraHash = password_hash($datos["contraseña"], PASSWORD_DEFAULT);
$usuario = new Usuario($datos,$contraHash,$fecha,$imagen);
    return $usuario;
  }

  static public function fotoPerfil($imagen){
    $nombre = $_FILES["fotoperfil"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $archivoOrigen = $_FILES["fotoperfil"]["tmp_name"];
    $rutaDestino = dirname(__FILE__);
    $rutaDestino = $rutaDestino."/../fotos/";
    $nombreImg = uniqid();
    $rutaDestino = $rutaDestino.$nombreImg.".".$ext;
    move_uploaded_file ($archivoOrigen, $rutaDestino);
    return $nombreImg.".".$ext;
  }

  public function armarFecha($datos)
  {
    $fecha=$datos["dia"]."-".$datos["mes"]."-".$datos["año"];
    return $fecha;
  }

static public function armarMascota($datos,$fecha){
  $usuarioM = new UsuarioMascota($datos,$fecha);
  return $usuarioM;
}
function reg($datos)
{
  setcookie("form",$datos);
}
}
 ?>
