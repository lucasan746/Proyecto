<?php include_once 'images.php';
include 'migracion.php';
if (isset($_SESSION["usuario"])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <!-- Menu de registro -->
    <!-- <section class="cajalogin" id="<?= $imagenes[$alea] ?>"> -->
      <section class="cajadelogin">
      <a href="index.php"><img src="images/icon-lazy.png" alt="icono"  class="iconoprin"></a>
      <article class="artilogin">
        <video autoplay muted loop id="myVideo">
          <source src="<?= $videos[$vidalea] ?>" type="video/mp4">
        </video>
        <div class="vid">
        <h1 class="titulog">Sloth</h1>
        <h3>Un espacio para tu mascota</h3>
        <a class="botonlog" href="registro.php">Registrarse</a>
        <a class="botonlog2" href="login.php">Iniciar Sesión</a>
      </div>
      </article>
      <a href="#ancla"><img src="images/flecha2.png" alt="flecha" class="flecha"></a>
    </section>
    <div class="container">
    <div class="barramenu">
      <a href="login.php" name="ancla" class="botonlog3">Inicia Sesión</a>
      <a href="registro.php" class="botonlog4">Registrate</a>
    </div>
    <!-- fin :c -->
      <!-- Preguntas y respuestas -->
<section class="preg1">


  <article class="contenido1">
<div class="media1 imagenesres">
  <img class="m1-a" src="images/index/girl-2.png"   >
  <img class="m1-b" src="images/index/paw.png"  >
    <img class="m1-c" src="images/index/website.png"   >
    <img class="m1-d" src="images/index/photos.png" >
    <img class="m1-e" src="images/index/photo.png"  >
    <img class="m1-f"src="images/index/cat.png"  >

</div>
<div class="data1">
  <h1 class="titulopre">Crea tu slot</h1>
  <p class="parrafos">Dale voz a tu mascota. Crea tu perfil o el de tu mascota y cuenta cómo es su vida, cuáles son sus gustos o qué lugares han visitado.
Encuentra amigos y compañeros de juegos para tu mascota y haz actividades en común con ellos.
</p>
</div>
</article>
</section>

<section class="preg2">
  <article class="contenido2">
    <div class="data2">
  <h1 class="titulopre">Conoce gente como tu </h1>
  <p class="parrafos">¿Quieres encontrar a gente que comparta tu misma pasión por los animales? En Sloth puedes participar en grupos con tus mismos intereses, crear tus propias comunidades, organizar quedadas y eventos.
</p>
  </div>
  <div class="media2 imagenesres">
  <img class="m2-a" src="images/index/chat.png" alt="">
  <img class="m2-b" src="images/index/friends-1.png" alt="" class="imgpreg2" >
  <img class="m2-c" src="images/index/dog-1.png" alt="">
</div>
</article>

</section>

<!-- fin parte fati -->

<!-- Preguntas y respuestas -->
<section class="preg3">
    <article class="contenido3">
      <div class="media3 imagenesres">
      <img class="m3-a" src="images/index/assistant.png" >
      <img class="m3-b" src="images/index/food.png" alt="">
      <img class="m3-c" src="images/index/heart.png" alt="">
      <img class="m3-d" src="images/index/dog-house.png" alt="">
      <img class="m3-e" src="images/index/dog-body.png" alt="">
      </div>
      <div class="data3">
      <h1 class="titulopre">Ayuda a otros animales</h1>
      <p class="parrafos">Consulta las necesidades de las protectoras, apúntante a programas de voluntariado, haz donaciones... ¡haz que este mundo sea un poco más feliz para los animales que sufren!
.</p>
      </div>
    </article>
</section>
<section class="preg4">
    <article class="contenido4">
      <div class="media4-iz imagenesres">
        <img class="m4-a" src="images/index/bff.png" alt="">
      <img class="m4-b" src="images/index/heart-2.png" >
      <img class="m4-c" src="images/index/girl.png" alt="">
      </div>
    <div class="data4">
      <h1 class="titulopre">Unete a Sloth!</h1>
      <p class="parrafos">Sumate a todos aquellos amantes de los animales que quieran compartir y disfrutar al máximo de la experiencia de tener una mascota.
Te esperamos dentro!.</p>
    </div>
    <div class="media4-dr imagenesres">
      <img class="m4-d" src="images/index/boy.png">
      <img class="m4-e" src="images/index/give-heart.png" alt="">
      <img class="m4-f" src="images/index/star.png" alt="">
      </div>
    </article>
  <!-- Fin  -->
</section>
<footer>
  <ul class="foot">
    <li><a href="#">Contacto</a></li>
    <li><a href="#">Legales</a></li>
    <li><a href="#">Ayuda</a></li>
    <li><a href="#">Privacidad</a></li>
    <li><a href="preguntas.php">Preguntas frecuentes</a></li>
  </ul>
</footer>
</div>
  </body>
</html>
