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
<article class="registro-mascota">
  <div class="cajatitulo">
  <h1 class="titulog">Sloth</h1>
  <h3>Un espacio para tu mascota</h3>
  </div>
<div class="formulario-mascota">
  <h4 class="datos">Datos de tu mascota</h4>

  <form class="registro1" action="login.php" method="post"  >

      <input class="regmasc" type="" placeholder="Nombre" name="" value="">
      <br>
      <label class="eligea" for="">Elige su tipo</label>
      <br>
      <select class="selecani"name="type">
   <option selected value="0">Tipos de mascota</option>

       <option value="1">Gato</option>
       <option value="2">Perro</option>
       <option value="3">Tortuga</option>
       <option value="">Pez</option>
       <option value="">Hurón</option>
       <option value="">Conejo</option>
       <option value="">Ave</option>
       <option value="">Otro</option>

 </select>
 <label class="cumple-m" for="">Su cumpleaños</label>
      <br>

      <input class="gen-m1" type="radio" name="gender" >
      <span class="ma">Macho</span>
      <input class="gen-m2" type="radio" name="gender" >
      <span class="hem">Hembra</span>
      <input class="gen-m3" type="radio" name="gender" >
      <span class="nolo">No lo sé</span>
     <br>

    <select class="regday-m" name="dia">
      <option selected value="0">Dia</option>
      <option value="">1</option>
      <option value="">2</option>
    </select>
    <select class="regmonth-m" name="mes">
      <option selected value="">Mes</option>
      <option value="">Enero</option>
      <option value="">Febrero</option>
    </select>
    <select class="regyear-m" name="año">
      <option selected value="">Año</option>
      <option value="">1950</option>
      <option value="">2006</option>

    </select>

      <br>
      <label class="pelaje" for="">Que color predomina </label>
      <br>
      <select class="colorpelaje" name="color">
   <option selected value="0"> Elige un color </option>

       <option value="">Negro</option>
       <option value="">Blanco</option>
       <option value="">Marron</option>
       <option value="">No tiene pelaje</option>
 </select>

<br>
  <button type="submit" name="enviar" class="botonreg">Registrate</button>

  </form>
</div>
</article>
<a class="botomitir" href="login.php">Omitir</a>

</section>
