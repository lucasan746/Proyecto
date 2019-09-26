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
  $errores=validar($_POST,$_FILES);
  if ($errores!=0) {
    foreach ($errores as $key => $value) {
      echo "<p class='error'>* $value";
    }
  }
  else {
    $imagendeperfil=fotoPerfil($_FILES);
    $usuarionew=armarUsuario($_POST,$imagendeperfil);
  }
  }
  $ListaUsuarios=BaseDeDatos();

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

          <input class="reg1" type="text" placeholder="<?php if (isset($errores["nombre"])) {
            echo $errores["nombre"];
          } else {
            echo "Nombre";
          }?>" name="nombre">
          <br>

          <input class="reg2" type="text" placeholder="<?php if (isset($errores["apellido"])) {
            echo $errores["apellido"];
          } else {
            echo "Apellido";
          }?>" name="apellido">
          <br>

          <input class="reg3" type="text" placeholder="<?php if (isset($errores["usuario"])) {
            echo $errores["usuario"];
          } else {
            echo "Nombre de usuario";
          }?>" name="usuario">
          <br>

          <input class="reg4" type="text"placeholder="<?php if (isset($errores["email"])) {
            echo $errores["email"];
          } else {
            echo "Correo electronico";
          }?>" name="email"
          <br>

          <input class="reg5" type="password" placeholder="<?php if (isset($errores["contraseña"])) {
            echo $errores["contraseña"];
          } else {
            echo "Contraseña";
          }?>" name="contraseña">
          <br>

          <input class="reg6" type="password" placeholder="<?php if (isset($errores["confcontra"])) {
            echo $errores["confcontra"];
          } else {
            echo "Confirmar Contraseña";
          }?>"name="confcontra">
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
            <option value="1">1</option>
            <option value="2">2</option>
          </select>
          <select class="regmonth" name="mes">
            <option selected value="">Mes</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
          </select>
          <select class="regyear" name="año">
            <option selected value="">Año</option>
            <option value="1950">1950</option>
            <option value="2006">2006</option>

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
          <button type="submit" name="siguiente" class="botonsig">Siguiente</button>

      </form>
      </div>
    </article>
  </body>
</html>
