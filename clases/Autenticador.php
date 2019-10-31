<?php

class Autenticador{

static public function inicioSesion($usuario){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["usuario"] = $usuario["usuario"];
  $_SESSION["FotoDePerfil"] = $usuario["fotoperfil"];
  return $_SESSION;
}

}





 ?>
