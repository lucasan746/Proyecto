<?php
function validar($datos){
      $errores=[];
      if (strlen($_POST["nombre"])==0) {
        $errores= "El campo no puede estar vacio";
      }
      if (strlen($_POST["apellido"])==0) {
        $errores= "El campo no puede estar vacio";
      }
      if (strlen($_POST["usuario"])==0) {
        $errores= "El campo no puede estar vacio";
      }
      if (filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
        $errores= "El email es incorrecto";
      }
      if (strlen($datos["contraseña"])<=6) {
        $errores= "La contraseña debe tener minimo 6 caracteres";
      }
      if ($_POST["contraseña"]!=$_POST["confcontra"]) {
        $errores= "Las contraseñas no coinciden";
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
