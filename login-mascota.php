<?php include 'images.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>login mascota</title>
  </head>
  <body>
<section>
  <section class="cajalogin" id="<?= $imagenes[$alea] ?>">
    <a href="#"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
<article class="login-mascota">
  <h2>Registra a tu mascota</h2>
  <form class="" action="index.html" method="post">

      <input type="text" name="name" placeholder="El nombre de tu mascota">
      <br>
      <label for="">Elige su tipo</label>
      <br>
      <select name="type">
   <option selected value="0"> ¿Que animal es? </option>

       <option value="1">Gato</option>
       <option value="2">Perro</option>
       <option value="3">Tortuga</option>
       <option value="">Pez</option>
       <option value="">Hurón</option>
       <option value="">Conejo</option>
       <option value="">Ave</option>
       <option value="">Otro</option>

 </select>
      <br>
      <label for="">Genero</label>
      <input class="genero" type="radio" name="gender" value="male"> Macho
     <input class="genero" type="radio" name="gender" value="female"> Hembra
      <input class="genero" type="radio" name="gender" value="female"> No lo sé
     <br>
      <label for="start">Su cumpleaños</label>
      <br>
      <input type="date" id="start" name="trip-start"
       value=""
       min="1993-01-01" max="2019-12-31">
      <br>
      <label for="">Que color predomina en su pelaje</label>
      <br>
      <select name="color">
   <option selected value="0"> Elige un color </option>

       <option value="">Negro</option>
       <option value="">Blanco</option>
       <option value="">Marron</option>
       <option value="">No tiene pelaje</option>
 </select>
  <button type="submit" name="enviar" class="botonlog">Registrate</button>

  </form>
<a class="" href="#">Omitir</a>
</article>


</section>



  </body>
</html>
