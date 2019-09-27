<?php
session_start();
function validar($datos,$imagen){
      $errores=[];
      if (strlen($datos["nombre"])==0) {
        $errores["nombre"]= "El nombre no puede estar vacio";
      }
      if (strlen($datos["apellido"])==0) {
        $errores["apellido"]= "El apellido no puede estar vacio";
      }
      if (strlen($datos["usuario"])==0) {
        $errores["usuario"]= "El nombre de usuario no puede estar vacio";
      }
      if (filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      }
      else {
        $errores["email"]="el email es incorrecto";
      }
      if (strlen($datos["contraseña"])<=6) {
        $errores["contraseña"]= "La contraseña debe tener minimo 6 caracteres";
      }
      if ($datos["contraseña"]!=$datos["confcontra"]) {
        $errores["confcontra"]= "Las contraseñas no coinciden";
      }
      if ($datos["dia"]==null||$datos["mes"]==null||$datos["año"]==null) {
        $errores["fecha"]= "Debes seleccionar una fecha de Nacimiento";
      }
      if ($imagen["fotoperfil"]["error"]!=0) {
        $errores["imagen"]="Error en la imagen";
      }
      $nombimg = $_FILES["fotoperfil"]["name"];
      $ext = pathinfo($nombimg, PATHINFO_EXTENSION);
      if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
        $errores["fotoperfil"] = "La extension del archivo es incorrecto";
      }

      return $errores;
    }

function armarUsuario($datos,$imagen,$fecha)
{
    $contraHash = password_hash($datos["contraseña"], PASSWORD_DEFAULT);
  $usuario=[
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "usuario"=>$datos["usuario"],
    "email" => $datos["email"],
    "contrasenia"=>$contraHash,
    "pais"=>$datos["pais"],
    "sexo"=>$datos["sexo"],
    "Nacimiento"=>$fecha,
    "FotoDePerfil"=>$imagen
  ];
  return $usuario;
}
 function guardarUsuario($datos)
 {
   $json = json_encode($datos);
   file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
 }

 function fotoPerfil($imagen){
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
 function BaseDeDatos()
 {
   $baseDeDatos=file_get_contents("usuarios.json");
   $baseDeDatos=Explode(PHP_EOL,$baseDeDatos);
   array_pop($baseDeDatos);
   foreach ($baseDeDatos as $usuarios) {
     $ListaUsuarios[]=json_decode($usuarios,true);
   }
   return $ListaUsuarios;

 }
 function ValirdarEmail($usuario)
 {
   $usuarios=BaseDeDatos();
   for ($i=0; $i < count($usuarios); $i++) {
     $users[]=$usuarios[$i]["email"];
   }
foreach ($users as $key) {
  if ($key===$usuario) {
    $ts=true;
    break;
  }
  else {
    $ts=false;
  }
}
return $ts;
   }
 function ValirdarUser($usuario)
   {
     $usuarios=BaseDeDatos();
     for ($i=0; $i < count($usuarios); $i++) {
       $users[]=$usuarios[$i]["usuario"];
     }
  foreach ($users as $key) {
    if ($key===$usuario) {
      $ts=true;
      break;
    }
    else {
      $ts=false;
    }
  }
  return $ts;
     }
     function contraseña($usuario)
       {
         $usuarios=BaseDeDatos();
         for ($i=0; $i < count($usuarios); $i++) {
           $users[]=$usuarios[$i]["contrasenia"];
         }

      foreach ($users as $key) {
        if (password_verify($usuario, $key)) {
          $ts=true;
          break;
        }
        else {
          $ts=false;
        }
      }
      return $ts;
         }
  function armarFecha($datos)
  {
    $fecha=$datos["dia"]."-".$datos["mes"]."-".$datos["año"];
    return $fecha;
  }
  function validarLogin($datos){
    $val=ValirdarUser($datos);
    if ($val==true) {
      return $ts=true;
    }
    else {
      return $ts=false;
    }
  }
  function inicioSesion($usuario, $dato){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["usuario"] = $usuario["usuario"];
  $_SESSION["FotoDePerfil"] = $usuario["FotoDePerfil"];
}
?>
