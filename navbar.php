<header>
  <nav class="navbar">
      <div class="iconosderecha">
        <div class="ic">
          <form class="" action="#" method="get">
            <input type="text" name="busqueda" class="input" placeholder="Busqueda">
          </form>
          <img src="images/icon-lazy.png" alt="iconoprincipal" class="iconoprin3">
          <img src="images/iconos/usuario.png" alt="solicitudes" class="iconosbarra">
          <img src="images/iconos/bocadillo.png" alt="mensajes" class="iconosbarra">
          <img src="images/iconos/notificacion.png" alt="notificaciones" class="iconosbarra">
          <img src="images/iconos/ajustes.png" alt="grupos" class="iconosbarra">
          <a href="finsesion.php"><img src="images/iconos/ajustes.png" alt="ajustes" class="iconosbarra"></a>
        </div>
      </div>
      <div class="perfil">
        <img src="<?php echo "fotos/".$_SESSION["FotoDePerfil"]; ?>" alt="fotoperfil" class="fotoperfil">

      </div>
  </nav>
</header>
