<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <section class="cajalogin" id="<?= $imagenes[$alea] ?>">
      <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
      <article class="login">
        <h1 class="titulog">Sloth</h1>
        <h3>Un lugar para tu mascota</h3>
        <form class="iniciases" action="home.php" method="post">
          <label for="email"></label>
          <input type="text" name="email" placeholder="Email o Nombre de usuario">
          <label for="Contraseña"></label>
          <input type="text" name="contraseña" placeholder="Contraseña">
          <button type="submit" name="enviar" class="botonlog">Iniciar Sesión</button>
          <a class="botonlog2" href="registro.php">Crea una cuenta</a>
        </form>
      </article>
    </section>
  </body>
</html>
