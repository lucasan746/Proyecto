<?php include 'images.php' ?>
<?php include "arrays.php" ?>
<?php include_once "validacion.php" ?>
<?php  if ($_POST) {
  $errores=validarmascota($_POST);

}
  ?>
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
  <!-- <?php if (isset($errores)): ?>
    <?php foreach ($errores as $key => $error): ?>
        <li class="alert"><?=$error?></li>
    <?php endforeach; ?>
  <?php endif; ?> -->
<div class="formulario-mascota">
  <h4 class="datos">Datos de tu mascota</h4>

  <form class="registro1" action="registro-mascota.php" method="post" enctype="multipart/form-data"  >
      <label for="Nombre"></label>
      <input  class="regmasc" type="text" placeholder="<?php if (isset($errores["nombre"])) {
        echo $errores["nombre"];
      } else {
        echo "Nombre";
      }?>" name="nombre" value="<?=persistir("nombre")?>" >
      <br>
      <label class="eligea" for="">Elige su tipo</label>
      <br>
      <select  class="selecani" name="mascotas" >
   <option selected value="">Tipos de mascota</option>
    <?php foreach ($mascotas as $key => $mascotas): ?>
    <option value= <?=$key?>><?=$mascotas?></option>
    <?php endforeach; ?>
 </select>
 <label class="errormascota" for=""><?php if(isset($errores["mascotas"])) {
   echo $errores["mascotas"];
 } ?> </label>

 <label class="cumple-m" for="">Su cumpleaños</label>
      <br>
     <select class="regday-m"  name="dia"  >
       <option selected value="">Dia</option>
       <?php foreach ($dia as $key => $dia): ?>
         <option value=<?=$key?>><?= $dia?></option>
       <?php endforeach; ?>
     </select>
     <select class="regmonth-m" name="mes" >
       <option selected value="">Mes</option>
   <?php foreach ($mes as $key => $mes): ?>
         <option value=<?=$key?>><?=$mes?></option>
   <?php endforeach; ?>
     </select>

     <select class="regyear-m" name="año" >
       <option selected value="">Año</option>
       <?php foreach ($año as $key => $año): ?>
         <option value=<?=$key?>><?=$año?></option>
       <?php endforeach; ?>
     </select>
     <label class="errorfecha-m" for=""><?php if(isset($errores["fecha"])) {
       echo $errores["fecha"];
     } ?> </label>

     <input class="gen-m1" type="radio" name="gender" checked>
     <span class="ma">Macho</span>
     <input class="gen-m2" type="radio" name="gender"  >
     <span class="hem">Hembra</span>
     <input class="gen-m3" type="radio" name="gender" >
     <span class="nolo">No lo sé</span>
    <br>

      <br>
      <label class="pelaje" for="">Que color predomina </label>
      <br>
      <select class="colorpelaje" name="pelaje" >
   <option selected value=""> Elige un color </option>
      <?php foreach ($pelaje as $key => $pelaje): ?>
        <option value=<?=$key?>><?=$pelaje?></option>
      <?php endforeach; ?>
 </select>
 <label class="errorpelaje" for=""><?php if(isset($errores["pelaje"])) {
   echo $errores["pelaje"];
 } ?> </label>
<br>
  <button type="submit" name="enviar" class="botonreg">Registrate</button>

  </form>
</div>
</article>

<a class="botomitir" href="login.php">Omitir</a>

</section>
</body>
</html>
