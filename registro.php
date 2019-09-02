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
    <article class="cajareg">
      <div class="cajatitulo">
        <h1 class="titulog">Sloth</h1>
        <h3>Un espacio para tu mascota</h3>
      </div>
      <div class="formulario">
        <div class="formulario1">
      <form class="registro" action="registro-mascota.php" method="post">
          <br>
          <label for="nombre">Nombre:</label>
          <input class="reg1" type="text" name="nombre">
          <br><br>
          <label for="apellido">Apellido:</label>
          <input class="reg1" type="text" name="apellido">
          <br><br>
          <label for="confcontra">Nombre de Usuario:</label>
          <input class="reg1" type="text" name="usuario">
          <br><br>
          <label for="email">E-mail:</label>
          <input class="reg1" type="text" name="email">
          <br><br><br>
        </form>
        </div>
        <div class="formulario2">
          <form class="" action="registro-mascota.php">
          <br>
          <label class="f2" for="contraseña">Contraseña:</label>
          <input class="reg1" type="password" name="conraseña">
          <br><br>
          <label class="f2"for="confcontra">Confirmar contraseña:</label>
          <input class="reg1" type="password" name="confcontra">
          <br><br>
          <label class="f2" for="sexo">Género:</label>
          <input class="genero" type="radio" name="sexo" value="M">Mujer
          <input class="genero" type="radio" name="sexo" value="H">Hombre
          <input class="genero" type="radio" name="sexo" value="O">Otro
          <label class="f2" for="date">Fecha:</label>
          <input class="date" type="date" name="fecha">
          <br><br>
          <label class="f2" for="pais">País:</label>
          <select class="" name="pais">
            <?php foreach ($pais as $codigo => $pais): ?>
              <option value=<?=$codigo?>><?=$pais?></option>
            <?php endforeach; ?>
          </select>
          <br><br>
          <button type="submit" name="siguiente" class="botonreg">Siguiente</button>
        </div>
      </form>
      </div>
    </article>
  </body>
</html>
