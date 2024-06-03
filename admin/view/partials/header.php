 <nav class="navbar navbar-dark fixed-top  flex-md-nowrap p-0 shadow "style="background-color: #59ab6e ;">
  <a class="navbar-brand  col-sm-3 col-md-2 mr-0" href="../web/index.php" style="background-color: #59ab6e ;">ADMINISTRACION</a>
  
<div class="d-flex flex-row justify-content-center align-items-center">
      <?php if(isset($_SESSION['user_id'])){
        ?>
   					<div class="btn-group mx-5">
						<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['nombre']; ?>
						</button>
						<div class="dropdown-menu dropdown-menu-right">
							<button class="dropdown-item text-center" type="button" id="modalUpdate" data-toggle="modal" data-target="#exampleModal" data-url="<?php echo getUrl("Usuarios","Usuarios","profile",false,"ajax"); ?>" data-usu_id="<?php echo $_SESSION['user_id']; ?>">Perfil</button>
							<?php 
								if($_SESSION['rol']==1){
									echo "<a href='../../usu/web/index.php'><button class='dropdown-item text-center' type='button'>Página principal</button></a>";
								}
							?>
							<a href="<?php echo getUrl("Acceso","Acceso","logout"); ?>"><button class="dropdown-item text-center" type="button">Cerrar sesión</button></a>

						</div>
					</div>
        <?php
      }else{
        ?>
        <li class="main_nav_item"><a href="login.php">Inicio de Sesion</a></li>
      <?php
      }
      ?>
    </div>


</nav>


<nav id="botonera" class="col-md-2 d-none d-md-block sidebar" style="background-color: #59ab6e ;">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <span data-feather="home"></span>
            Pagina Principal
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getUrl('Usuarios', 'Usuarios', 'consult'); ?>">
            <span data-feather="users"></span>
            Usuarios
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getUrl('Oferta', 'Oferta', 'consult'); ?>">
            <span data-feather="list"></span>
            Ofertas
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getUrl('Pqrs', 'Pqrs', 'consult'); ?>">
            <span data-feather="book"></span>
            PQRSF
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo getUrl('Estado', 'Estado', 'consult'); ?>">
            <span data-feather="info"></span>
            Estado
          </a>
        </li>
      </ul>
    </div>
  </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
      </div>

