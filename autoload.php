<?php
require_once("clases/BaseMySQL.php");
require_once("clases/Usuario.php");
require_once("clases/UsuarioMascota.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/Autenticador.php");
$host="localhost";
$usuario="root";
$contraseña="";
$nombreDB="sloth_db";
$puerto=3306;
$conexion=new BaseDatos;
$DB=$conexion->conectarDB($host,$nombreDB,$usuario,$contraseña,$puerto);
$validar = new Validador;
 ?>
