<?php
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
        $errores["email"] = "El email es incorrecto";
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

function armarUsuario($datos,$imagen)
{
  $usuario=[
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "email" => $datos["email"],
    "contrasenia"=>$datos["contraseña"],
    "pais"=>$datos["pais"],
    "sexo"=>$datos["sexo"],
    "Nacimiento"=>$datos["fecha"],
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
 function ValirdarUser($usuario)
 {
   $usuarios=BaseDeDatos();
   foreach ($usuarios as $key => $personas) {
     if ($personas===$usuario["email"]) {
       return true;
     }
     else {
       return false;
     }
   }
 }

?>
