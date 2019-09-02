<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <section class="cajalogin2" id="<?= $imagenes[$alea] ?>">
      <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
      <article class="login">
        <h1 class="titulog2">Sloth</h1>

        <form class="iniciases" action="home.php" method="post">
          <label for="email"></label>
          <input type="text" name="email" placeholder="Email o Nombre de usuario">
          <label for="Contraseña"></label>
          <input type="text" name="contraseña" placeholder="Contraseña">
          <button type="submit" name="enviar" class="botonlog">Iniciar Sesión</button>
        </form>
      </article>
      <a class="botoninic" href="registro.php">Registrate</a>
    </section>
  </body>
</html>
