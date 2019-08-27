<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <section class="cajalogin" id="<?= $imagenes[$alea] ?>">
      <a href="#"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
        <h1 class="tiulog">Sloth</h1>
    <article class="cajareg">
      <h3 class="regh3">Resgistrate</h3>
      <br>
      <form class="registro" action="registro.html" method="post">
          <label for="nombre">Nombre:</label>
          <input class="reg1" type="text" name="nombre">
          <br><br>
          <label for="apellido">Apellido:</label>
          <input class="reg1" type="text" name="apellido">
          <br><br>
          <label for="email">E-mail:</label>
          <input class="reg1" type="text" name="email">
          <br><br>
          <label for="contraseña">Contraseña</label>
          <input class="reg1" type="password" name="conraseña">
          <br><br>
          <label for="confcontra">Confirmar contraseña:</label>
          <input class="reg1" type="password" name="confcontra">
          <br><br>
          <label for="sexo">Género:</label>
          <input class="genero" type="radio" name="sexo" value="M">Mujer
          <input class="genero" type="radio" name="sexo" value="H">Hombre
          <input class="genero" type="radio" name="sexo" value="O">Otro
          <label for="date">Fecha:</label>
          <input class="date" type="date" name="fecha">
          <button type="submit" name="siguiente" class="botonreg">Siguiente</button>
      </form>
    </article>
  </body>
</html>
