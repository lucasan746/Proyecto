<?php include 'images.php'; ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">

    <title>login mascota</title>
  </head>
  <body id="<?= $imagenes[$alea] ?>">
  <section class="cajalogin3">
    <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
<article class="registromascota">
  <div class="cajatitulo">
  <h1 class="titulog">Sloth</h1>
  <h3>Un espacio para tu mascota</h3>
  </div>

  <form class="registro" action="login.php" method="post"  >
<h4>Datos de tu mascota</h4>
  <br>

     <input class="reg1" type="text" placeholder="Nombre de tu mascota" name="nombre">
      <br>
      <br>

      <select class="selector"name="type">
   <option selected value="0">¿Que animal es?</option>

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
      <br>
      <label for="">Genero:</label>
    
      <input class="genero" type="radio" name="gender" value="male"> Macho
     <input class="genero" type="radio" name="gender" value="female"> Hembra
      <input class="genero" type="radio" name="gender" value="female"> No lo sé
     <br>
    <br>
      <label for="start">Su cumpleaños</label>
      <br>
      <input type="date" id="start"  placeholder="Nacimiento "name="trip-start"
       value=""
       min="1993-01-01" max="2019-12-31">
      <br>
      <br>
      <label for="">Que color predomina en su pelaje</label>
      <br>
      <select class="selectorcolor" name="color">
   <option selected value="0"> Elige un color </option>

       <option value="">Negro</option>
       <option value="">Blanco</option>
       <option value="">Marron</option>
       <option value="">No tiene pelaje</option>
 </select>

<br>
  <button type="submit" name="enviar" class="botonlog">Registrate</button>

  </form>

</article>
<a class="botomitir" href="login.php">Omitir</a>

</section>
