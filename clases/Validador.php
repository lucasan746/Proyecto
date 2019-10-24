<?php

 class Validador {

public function validar($datos,$imagen){
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
public function validarLogin($datos, $usuario){

    if(password_verify($datos["contraseña"], $usuario["contraseña"]) == false){
      $errores[] = "El usuario/contraseña es incorrecto";
    }

    return $errores;
  }

 }




 ?>
