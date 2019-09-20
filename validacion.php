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

function armarUsuario($datos)
{
  $usuario=[
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "email" => $datos["email"],
    "contrasenia"=>$datos["contraseña"],
    "pais"=>$datos["pais"],
    "sexo"=>$datos["sexo"],
    "Nacimiento"=>$datos["fecha"]
  ];
  return $usuario;
}
 function guardarUsuario($datos)
 {
   $json = json_encode($datos);
   file_put_contents("usuarios.json",$json.PHP_EOL, FILE_APPEND);
 }


?>
