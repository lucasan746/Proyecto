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
    <article class="cajareg">
      <div class="cajatitulo">
        <h1 class="titulog">Sloth</h1>
        <h3>Un espacio para tu mascota</h3>
      </div>
      <br>
      <div class="formulario">
        <div class="formulario1">
      <form class="registro" action="registro.html" method="post">
          <h3 class="regh3">Resgistrate</h3>
      <form class="registro" action="registro-mascota.php" method="post">
          <br>
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
        </div>
        <div class="formulario2">
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
        </div>
      </form>
      </div>
    </article>
  </body>
</html>
