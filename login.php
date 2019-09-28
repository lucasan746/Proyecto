<?php include 'images.php';
include 'validacion.php';
if ($_POST) {
  $us=validarLogin($_POST["usuario"]);
  if ($us==true) {
    $us=contraseña($_POST["contraseña"]);
    if ($us==true) {
      $us=compararDatos($_POST);
      if ($us==true) {
        buscarUsuario($_POST["usuario"]);
        $record["recordar"]=recordar($_POST);
        recordarUsu($_POST,$record);
        header("location:home.php");
      }
      else {
        echo "La contrasña es incorrecta";
      }
    }
    else {
      echo "La contraseña es incorrecta";
    }
  }
  else {
    echo "el usuario es incorrecto";
  }
}
if (isset($_SESSION["usuario"])) {
  header("location:home.php");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather&display=swap" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <section class="cajadelogin" id="<?= $imagenes[$alea] ?>">
      <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
      <article class="login">
        <h1 class="titulog2">Sloth</h1>

        <form class="iniciases" action="login.php" method="post">
          <label for="usuario"></label>
          <input type="text" name="usuario" placeholder="Nombre de usuario" value="<?php if(isset($_COOKIE["usuario"])){echo $_COOKIE["usuario"];} ?>">
          <label for="Contraseña"></label>
          <input type="password" name="contraseña" placeholder="Contraseña" value="<?php if(isset($_COOKIE["contraseña"])){echo $_COOKIE["contraseña"];} ?>">
          <label for="recordarus">Recordar Usuario</label>
          <input type="checkbox" name="recordar" value="si">
          <button type="submit" name="enviar" class="botonlog">Iniciar Sesión</button>
        </form>
      </article>
      <a class="botoninic" href="registro.php">Registrate</a>
    </section>
  </body>
</html>
