<?php
$pais = [
  "Arg" => "Argentina",
  "Chi" => "Chile",
  "Col" => "Colombia",
  "Ale" => "Alemania",
  "Itl" => "Italia",
  "Ecu" => "Ecuador",
  "Ven" => "Venezuela",
  "Brs" => "Brasil",
  "Esñ" => "España"
];
?>

<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body id="<?= $imagenes[$alea] ?>">
    <a href="#"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
      <a class="botoninic" href="home.php">Iniciar sesión</a>
    <section class="secreg">
      <article class="formulario">
        <form class="" action="index.html" method="post">
          <div style="width:50%; float:left;">
          <label for="nombre">Nombre:</label>
          <input class="reg1" type="text" name="nombre">
          <label for="apellido">Apellido:</label>
          <input class="reg1" type="text" name="apellido">
          <label for="confcontra">Nombre de Usuario:</label>
          <input class="reg1" type="text" name="usuario">
          <label for="email">E-mail:</label>
          <input class="reg1" type="text" name="email">
        </div>
        <div style="width:50%; float:left;">
          <label class="f2" for="contraseña">Contraseña:</label>
          <input class="reg1" type="password" name="conraseña">
          <label class="f2"for="confcontra">Confirmar contraseña:</label>
          <input class="reg1" type="password" name="confcontra">
          <label class="f2" for="sexo">Género:</label>
          <input class="genero" type="radio" name="sexo" value="M">Mujer
          <input class="genero" type="radio" name="sexo" value="H">Hombre
          <input class="genero" type="radio" name="sexo" value="O">Otro
          <label class="f2" for="date">Fecha:</label>
          <input class="date" type="date" name="fecha">
          <label class="f2" for="pais">País:</label>
          <select class="" name="pais">
            <?php foreach ($pais as $codigo => $pais): ?>
              <option value=<?=$codigo?>><?=$pais?></option>
            <?php endforeach; ?>
          </select>
          <button type="submit" name="siguiente" class="botonreg">Siguiente</button>
        </div>
        </form>

      </article>
    </section>



  </body>
</html>
