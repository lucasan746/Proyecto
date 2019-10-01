<?php

include_once 'validacion.php';
if ($_POST) {
  $errores=validar($_POST,$_FILES);
  // if ($errores!=0) {
  //   foreach ($errores as $key => $value) {
  //     echo "<p class='error'>* $value";
  //   }
  // }
  if ($errores==null) {
    $imagendeperfil=fotoPerfil($_FILES);
    $fecha=armarFecha($_POST);
    $usuario=armarUsuario($_POST,$imagendeperfil,$fecha);
    $mailreg=ValirdarEmail($usuario["email"]);
    if ($mailreg==true) {
      $errores["email2"]="El email ya está registrado";
    }
    else {
      $user=ValirdarUser($usuario["usuario"]);
      if ($user==true) {
        $errores["usuario2"]= "El usuario está registrado";
      }
      else {
        guardarUsuario($usuario);
        reg($usuario["nombre"]);
        header("location:registro-mascota.php");
      }

    }
  }
  }
  if (isset($_SESSION["usuario"])) {
    header("location:home.php");
  }
?>
<?php include "arrays.php"; ?>
<?php include 'images.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">

    <title>Registro</title>
  </head>
  <body id="<?= $imagenes[$alea] ?>">
    <head>
      <nav>
        <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
          <a class="botoninic" href="login.php">Iniciar sesión</a>
      </nav>
    </head>
    <section class="cajalogin">

      <br>
    <article class="registro-persona">
      <div class="cajatitulo">
        <h1 class="titulog">Sloth</h1>
        <h3>Un espacio para tu mascota</h3>
      </div>

      <div class="formulario">
        <h4 class="datos">Tus datos</h4>

        <form class="registro" action="registro.php" method="post" enctype="multipart/form-data">
          <label for="Nombre"></label>
          <input  class="reg1" type="text" placeholder="<?php if (isset($errores["nombre"])) {
            echo $errores["nombre"];
          } else {
            echo "Nombre";
          }?>" name="nombre" value="<?=persistir("nombre")?>">
          <br>

          <label for="apellido"></label>
          <input  class="reg2" type="text" placeholder="<?php if (isset($errores["apellido"])) {
            echo $errores["apellido"];
          } else {
            echo "Apellido";
          }?>" name="apellido"  value=<?=persistir("apellido")?>>
          <br>

          <input  class="reg3" type="text" placeholder="<?php if (isset($errores["usuario"])) {
            echo $errores["usuario"];
          } else {
            echo "Nombre de usuario";
          }?>" name="usuario"  value=<?=persistir("usuario")?>>
          <label class="usregis" for="usuario"><?php if (isset($errores["usuario2"])) {
             echo $errores["usuario2"];
          } ?></label>

          <input  class="reg4" type="text"placeholder="<?php if (isset($errores["email"])) {
            echo $errores["email"];
          } else {
            echo "Correo electronico";
          }?>" name="email"  value=<?php if(isset($errores["email"])) {}else {

              $asd = persistir("email");
            echo $asd;
          } ?>>
          <label  class="mailregis"for="email"><?php if (isset($errores["email2"])) {
            echo $errores["email2"];
          } ?></label>
          <br>

          <label for="contraseña"></label>
          <input  class="reg5" type="password" placeholder="<?php if (isset($errores["contraseña"])) {
            echo $errores["contraseña"];
          } else {
            echo "Contraseña";
          }?>" name="contraseña">
          <br>

          <label for="confcontra"></label>
          <input class="reg6" type="password" placeholder="<?php if (isset($errores["confcontra"])) {
            echo $errores["confcontra"];
          } else {
            echo "Confirmar Contraseña";
          }?>"name="confcontra">
          <br>

          <label for="sexo"></label>
          <input class="gen1" type="radio" name="sexo" value="M" checked >
           <span class="muj">Hombre</span>
          <input class="gen2" type="radio" name="sexo"  value="H">
          <span class="hom">Mujer</span>
          <input class="gen3" type="radio" name="sexo" value="O">
          <span class="otr">Otro</span>
          <br>
          <select class="regday"  name="dia"  >
            <option selected value="">Dia</option>
            <?php foreach ($dia as $key => $dia): ?>
              <option value=<?=$key?>><?= $dia?></option>
            <?php endforeach; ?>
          </select>

          <select class="regmonth" name="mes" >
            <option selected value="">Mes</option>
        <?php foreach ($mes as $key => $mes): ?>
              <option value=<?=$key?>><?=$mes?></option>
        <?php endforeach; ?>
          </select>

          <select class="regyear" name="año" >
            <option selected value="">Año</option>
            <?php foreach ($año as $key => $año): ?>
              <option value=<?=$key?>><?=$año?></option>
            <?php endforeach; ?>
          </select>

          <br>
          <label for="pais"></label>
          <select  class="regpais" name="pais">
            <?php foreach ($pais as $codigo => $pais): ?>
              <option value=<?=$codigo?>><?=$pais?></option>
            <?php endforeach; ?>
          </select>
          <label class="errorfecha" for=""><?php if(isset($errores["fecha"])) {
            echo $errores["fecha"];
          } ?> </label>

          <br><br>
          <label class="sube"for="">Sube una foto tuya o de tu mascota</label>
          <input  class="subeimg"type="file"  name="fotoperfil">
          <label class="errorimagen" for=""><?php if(isset($errores["imagen"])) {
            echo $errores["imagen"];
          } ?> </label>
          <label class="errorexten" for=""><?php if(isset($errores["fotoperfil"])) {
            echo $errores["fotoperfil"];
          } ?> </label>
          <br><br>
          <button type="submit" class="botonsig">Siguiente</button>

      </form>
      </div>
    </article>
  </section>
  </body>
</html>
