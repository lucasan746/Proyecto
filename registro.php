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
      <h1>Registrate</h1>
      <form class="registro" action="registro.html" method="post">
          <label for="nombre"></label>
          <input class="reg1" type="text" name="nombre" placeholder="Nombres">
          <label for="apellido"></label>
          <input class="reg1" type="text" name="apellido" placeholder="Apellidos">
          <label for="email"></label>
          <input class="reg1" type="text" name="email" placeholder="Email del usuario">
          <label for="contraseña"></label>
          <input class="reg1" type="password" name="conraseña" placeholder="Contraseña">
          <label for="confcontra"></label>
          <input class="reg1" type="password" name="confcontra" placeholder="Confirmar contraseña">
          <label for="sexo">Sexo:</label>
          <input class="sexo" type="radio" name="sexo" value="M">Mujer
          <input class="sexo" type="radio" name="sexo" value="H">Hombre
          <input class="sexo" type="radio" name="sexo" value="O">Otro
          <label for="date">Fecha:</label>
          <input class="date" type="date" name="fecha">
          <button type="submit" name="siguiente" class="botonreg">Siguiente</button>
      </form>
    </article>
  </body>
</html>
