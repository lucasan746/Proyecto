<?php include 'images.php';
include 'migracion.php';
include 'autoload.php';
if ($_POST) {
  $usuario=BaseDatos::buscarPorUsuario($_POST["usuario"],$DB,"usuarios");
  if ($usuario==null) {
    $erroreslogin["usuario"]="el usuario no esta registrado";
  }
  else {
    if (password_verify($_POST["contraseña"],$usuario["contrasenia"])) {
      Autenticador::inicioSesion($usuario);
      header("location:home.php");
    }
    else {
      $erroreslogin["contraseña"]="la contraseña no coincide";
    }
  }
}
if (isset($_SESSION["usuario"])) {
  header("location:home.php");
}
// var_dump($_SESSION);
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
          <a class="botoninic" href="registro.php">Registrate</a>
      </nav>
    </header>
    <section class="cajadelogin" id="<?= $imagenes[$alea] ?>">

      <article class="login">
        <h1 class="titulog2">Sloth</h1>

        <form class="iniciases" action="login.php" method="post">

          <input class="inputusua"type="text" name="usuario" placeholder="Nombre de usuario" value="<?php if(isset($_COOKIE["usuario"])){echo $_COOKIE["usuario"];} ?>">
          <label class="errorlogin1" for="usuario"><?php if(isset($erroreslogin["usuario"])) {
            echo $erroreslogin["usuario"];
          } ?></label>

          <input class="inputcontra" type="password" name="contraseña" placeholder="Contraseña" value="<?php if(isset($_COOKIE["contraseña"])){echo $_COOKIE["contraseña"];} ?>">
          <label class="errorlogin2" for="Contraseña"><?php if(isset($erroreslogin["contraseña"])) {
            echo $erroreslogin["contraseña"];
          } ?></label>

          <br>

          <label class="recuerda" for="recordarus">Recordar Usuario</label>
          <input class="inputrecuerda"type="checkbox" name="recordar" value="si">

          <button type="submit" name="enviar" class="botonlog">Iniciar Sesión</button>
        </form>
      </article>
    </section>
  </body>
</html>
