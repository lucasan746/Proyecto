<?php
$pais = [
  "Arg" => "Argentina",
  "Chi" => "Chile",
  "Col" => "Colombia",
  "Ale" => "Alemania",
  "Itl" => "Italia",
  "Ecu" => "Ecuador",
  "Ven" => "Venezuela",
  "Brs" => "Brasil",
  "Esñ" => "España"
];
include_once 'validacion.php';
if ($_POST) {
  $errores=validar($_POST);
  $user=ValirdarUser($_POST);
  var_dump($user);
  if ($user==false) {
  if ($errores==0) {
    $FotoDePerfil=fotoPerfil($_FILES["fotoperfil"]);
    $usuario=armarUsuario($_POST,$FotoDePerfil);
    guardarUsuario($usuario);
  }
}}
// if ($user==true) {
//   echo "el email esta registrado";
// }
?>

<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">

    <title>Registro</title>
  </head>
  <body id="<?= $imagenes[$alea] ?>">
    <section class="cajalogin">
      <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
        <a class="botoninic" href="login.php">Iniciar sesión</a>
      <br>
    <article class="registro-persona">
      <div class="cajatitulo">
        <h1 class="titulog">Sloth</h1>
        <h3>Un espacio para tu mascota</h3>
      </div>
      <div class="formulario">
        <h4 class="datos">Tus datos</h4>

        <form class="registro" action="registro.php" method="post" enctype="multipart/form-data">

          <input class="reg1" type="text" placeholder="Nombre" name="nombre">
          <br>

          <input class="reg2" type="text" placeholder="Apellido" name="apellido">
          <br>

          <input class="reg3" type="text" placeholder="Nombre de usuario" name="usuario">
          <br>

          <input class="reg4" type="text"placeholder="Correo electrónico" name="email">
          <br>

          <input class="reg5" type="password" placeholder="Contraseña" name="contraseña">
          <br>

          <input class="reg6" type="password" placeholder="Confirmar contraseña"name="confcontra">
          <br>

          <input class="gen1" type="radio" name="sexo" value="M">
           <span class="muj">Mujer</span>
          <input class="gen2" type="radio" name="sexo"  value="H">
          <span class="hom">Hombre</span>
          <input class="gen3" type="radio" name="sexo" value="O">
          <span class="otr">Otro</span>
          <br>
          <select class="regday" name="dia">
            <option selected value="0">Dia</option>
            <option value="">1</option>
            <option value="">2</option>
          </select>
          <select class="regmonth" name="mes">
            <option selected value="">Mes</option>
            <option value="">Enero</option>
            <option value="">Febrero</option>
          </select>
          <select class="regyear" name="año">
            <option selected value="">Año</option>
            <option value="">1950</option>
            <option value="">2006</option>

          </select>
          <br>

          <select class="regpais" name="pais">
            <?php foreach ($pais as $codigo => $pais): ?>
              <option value=<?=$codigo?>><?=$pais?></option>
            <?php endforeach; ?>
          </select>
          <br><br>
          <label class="sube"for="">Sube una foto tuya o de tu mascota</label>
          <input class="subeimg"type="file"  name="fotoperfil">
          <br><br>
          <button type="submit" name="siguiente" class="botonreg">Siguiente</button>

      </form>
      </div>
    </article>
  </body>
</html>
