 <body>
  
  <!-- navLateral -->
  <section class="full-width navLateral">
    <div class="full-width navLateral-bg btn-menu"></div>
    <div class="full-width navLateral-body">
      <div class="full-width navLateral-body-logo text-center tittles">
        <i class="zmdi zmdi-close btn-menu"></i> ADMINISTRACION 
      </div>
      <figure class="full-width navLateral-body-tittle-menu">
        <div>
          <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
        </div>
        <figcaption>
          <span>
            Diana isabel<br>
            <small>Admin</small>
          </span>
        </figcaption>
      </figure>
      <nav class="full-width">
        <ul class="full-width list-unstyle menu-principal">
          <li class="full-width">
            <a href="../web/index.php" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-home"></i>
              </div>
              <div class="navLateral-body-cr">
                Pagina princiapl
              </div>
            </a>
          </li>
          <li class="full-width">
            <a href="<?php echo getUrl("Usuarios", "Usuarios", "consult") ?>" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-accounts"></i>
              </div>
              <div class="navLateral-body-cr">
                 Usuarios
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="<?php echo getUrl("Ofertas", "Ofertas", "consult") ?>" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-washing-machine"></i>
              </div>
              <div class="navLateral-body-cr">
                Productos
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="<?php echo getUrl("Pedidos", "Pedidos", "consult") ?>" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="navLateral-body-cr">
                Pedidos
              </div>
            </a>
          </li>
          <li class="full-width divider-menu-h"></li>
          <li class="full-width">
            <a href="<?php echo getUrl("Noticias", "Noticias", "consult") ?>" class="full-width">
              <div class="navLateral-body-cl">
                <i class="zmdi zmdi-book"></i>
              </div>
              <div class="navLateral-body-cr">
                NOTICIAS
              </div>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- pageContent -->
  <section class="full-width pageContent">
    <!-- navBar -->
    <div class="full-width navBar">
      <div class="full-width navBar-options">
        <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i> 
        <div class="mdl-tooltip" for="btn-menu">ABRIR/CERRAR MENU</div>
        <nav class="navBar-options-list">
          <ul class="list-unstyle">
            
            <li class="btn-exit" id="btn-exit">
              <i class="zmdi zmdi-power"></i>
              <div class="mdl-tooltip" for="btn-exit">Cerrar sesion</div>
            </li>
            <li class="text-condensedLight noLink" ><small>Diana isabel</small></li>
            <li class="noLink">
              <figure>
                <img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
              </figure>
            </li>
          </ul>
        </nav>
      </div>
    </div>
