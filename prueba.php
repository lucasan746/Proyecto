<?php include 'clases/BaseMySQL.php';
include 'clases/Usuario.php';
require 'clases/Validador.php';
$host="localhost";
$usuario="root";
$contraseña="";
$nombreDB="sloth_db";
$puerto=330;
$conexion=new BaseDatos;
$DB=$conexion->conectarDB($host,$nombreDB,$usuario,$contraseña,$puerto);
$val= new Validador;
$ver=$val->validar($_POST,$_FILES);
foreach ($ver as $key => $value) {
  echo $value."<br>";
}
if ($ver==null) {
  $us=$conexion->buscarPorEmail($_POST["email"],$DB,"user");
  if ($us==false) {
    $reg=new ArmarRegistro;
    $imagen=$reg->fotoPerfil($_FILES);
    $fecha=$reg->armarFecha($_POST);
    $usuario=$reg->armarUsuario($_POST,$imagen,$fecha);
    $conexion->guardarUsuario($DB,$usuario);
  }
}



// $usu= new Usuario ($usuario,$contra,$fecha);
//
// $conexion->guardarUsuario($DB,$usu);
//
// var_dump($usu);

 ?>
