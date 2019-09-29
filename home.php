<?php include 'validacion.php';
if (isset($_SESSION["usuario"])==false) {
  header("location:login.php");
}
if (isset($_COOKIE["form"])) {
  unset($_COOKIE);
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
        <img src="<?php echo "fotos/".$_SESSION["FotoDePerfil"]; ?>" alt="fotoperfil" class="fotoperfil">
      </section>
    <?php require_once 'seccion1.php'; ?>
    <?php require_once 'seccion2.php'; ?>
  </section>
  </body>
</html>
