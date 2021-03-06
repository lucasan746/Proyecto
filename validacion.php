<?php

function validar($datos,$imagen){
      $errores=[];
      if (strlen($datos["nombre"])==0) {
        $errores["nombre"]= "No puede estar vacio";
      }
      if (strlen($datos["apellido"])==0) {
        $errores["apellido"]= "No puede estar vacio";
      }
      if (strlen($datos["usuario"])==0) {
        $errores["usuario"]= "No puede estar vacio";
      }
      if (filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      }
      else {
        $errores["email"]="El email es incorrecto";
      }
      if (strlen($datos["contraseña"])<6) {
        $errores["contraseña"]= "Debe tener minimo 6 caracteres";
      }
      if ($datos["contraseña"]!=$datos["confcontra"]) {
        $errores["confcontra"]= "Las contraseñas no coinciden";
      }
      if ($datos["dia"]==null||$datos["mes"]==null||$datos["año"]==null) {
        $errores["fecha"]= "Debes seleccionar una fecha de nacimiento";
      }
      if ($imagen["fotoperfil"]["error"]!=0) {
        $errores["imagen"]="Error en la imagen";
      }
      else {
        $nombimg = $_FILES["fotoperfil"]["name"];
        $ext = pathinfo($nombimg, PATHINFO_EXTENSION);
        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
          $errores["fotoperfil"] = "La extension del archivo es incorrecto";
        }
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
    "contraseña"=>$contraHash,
    "pais"=>$datos["pais"],
    "sexo"=>$datos["sexo"],
    "Nacimiento"=>$fecha,
    "avatar"=>$imagen
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

  function inicioSesion($usuario){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["usuario"] = $usuario["usuario"];
  $_SESSION["FotoDePerfil"] = $usuario["FotoDePerfil"];
}
function buscarUsuario($datos)
{
  $listusus=BaseDeDatos();
  rsort($listusus);
  $user=array_search($datos,array_column($listusus,'usuario'));
  $_SESSION["usuario"]=$listusus[$user]["usuario"];
  $_SESSION["FotoDePerfil"]=$listusus[$user]["FotoDePerfil"];

  }
  function compararDatos($datos)
  {
    $listusus=BaseDeDatos();
    rsort($listusus);
    $user=array_search($datos["usuario"],array_column($listusus,'usuario'));
    if ($listusus[$user]["usuario"]==$datos["usuario"]&&password_verify($datos["contraseña"],$listusus[$user]["contrasenia"])) {
      $ts=true;
      return $ts;
    }
    else {
      $ts=false;
      return $ts;
    }}
  function validarmascota($datos){
    $errores = [];
      if (strlen($datos["nombre"])==0) {
        $errores["nombre"] = "El nombre no puede estar vacio";
  }
  if ($datos["mascotas"]==null) {
    $errores["mascotas"]= "Selecciona un tipo de mascota";
  }
  if ($datos["dia"]==null||$datos["mes"]==null||$datos["año"]==null) {
    $errores["fecha"]= "Debes seleccionar una fecha de nacimiento";
  }
  if ($datos["pelaje"]==null) {
    $errores["pelaje"]= "Selecciona un color";
  }

  return $errores;
  }

  function armarMascota($datos,$fecha)
  {
    $mascota=[
      "nombre" => $datos["nombre"],
      "mascotas"=>$datos["mascotas"],
      "sexo"=>$datos["gender"],
      "Nacimiento"=>$fecha,
      "pelaje"=>$datos["pelaje"]

    ];
    return $mascota;
  }
  function guardarMascota($datos)
  {
    $json = json_encode($datos);
    file_put_contents("mascotas.json",$json.PHP_EOL, FILE_APPEND);
  }
  function BaseDeDatosMascota()
  {
    $baseDeDatos=file_get_contents("mascotas.json");
    $baseDeDatos=Explode(PHP_EOL,$baseDeDatos);
    array_pop($baseDeDatos);
    foreach ($baseDeDatos as $mascotas) {
      $ListaMascotas[]=json_decode($mascotas,true);
    }
    return $ListaMascotas;

  }


  function persistir($input){
    if(isset($_POST[$input])){
      return $_POST[$input];
    }
  }




  function recordarUsu($datos)
  {
    if (isset($datos["recordar"])) {
      $usu=$datos["usuario"];
      $contra=$datos["contraseña"];
        setcookie("usuario",$usu);
        setcookie("contraseña",$contra);
}

  }
  function reg($datos)
  {
    setcookie("form",$datos);
  }
?>
