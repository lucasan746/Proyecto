<?php include 'validacion.php';
if (isset($_SESSION["usuario"])==false) {
  header("location:login.php");
} ?>
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
    <?php require_once 'seccion1.php'; ?>
    <?php require_once 'seccion2.php'; ?>
  </section>
  </body>
</html>
