<?php include 'validacion.php';
if (isset($_SESSION["usuario"])==false) {
  header("location:login.php");
}?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed&display=swap" rel="stylesheet">
<meta name="viewport"
content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <title></title>
  </head>
  <body class="Home">
    <?php require_once 'navbar.php'; ?>
    <section class="cuerpohome">
      <section class="barratablet">
        <nav class="navbar2">
            <div class="iconosderecha">

                <img src="images/iconos/usuario.png" alt="solicitudes" class="icon-solicitud">
                <img src="images/iconos/bocadillo.png" alt="mensajes" class="icon-mensaje">
                <img src="images/iconos/notificacion.png" alt="notificaciones" class="icon-notif">
                <img src="images/iconos/ajustes.png" alt="grupos" class="icon-config">
                <img src="<?php echo "fotos/".$_SESSION["FotoDePerfil"]; ?>" alt="fotoperfil" class="icon-foto">
                <a href="finsesion.php"><img src="images/iconos/outblanco.png" alt="ajustes" class="icon-cierre"></a>



            </div>
        </nav>
      </section>
    <?php require_once 'seccion1.php'; ?>
    <?php require_once 'seccion2.php'; ?>
  </section>
  </body>
</html>
