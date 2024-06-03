<?php
include_once '../view/partials/modal.php';
?>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Mano CD
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../web/index.php">Principal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo getUrl("Oferta", "Oferta", "getOferta") ?>">Productos</a>
                        </li>
                        <li class="nav-item">
                        <?php
					if (isset($_SESSION['user_id'])) {
					?>
						<li class="nav-item"><a href="<?php echo getUrl("Pqrs", "Pqrs", "getSend") ?>">Contactanos</a></li>
					<?php
					} else {
						echo "<li class='nav-item'><a href=" . getUrl('Pqrs', 'Pqrs', 'getSendU') . ">Contactanos</a></li>";
					}
					?>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
					<?php if (isset($_SESSION['user_id'])) {
		?>
			<div class="btn-group mx-5">
						<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['nombre']; ?>
						</button>
				<div class="dropdown-menu dropdown-menu-right">
					
					<?php
					if ($_SESSION['rol'] == 1) {
						echo "<a href='../../admin/web/index.php'><button class='dropdown-item text-center' type='button'>Panel de control</button></a>";
					}
					?>
					<a href="<?php echo getUrl("Acceso", "Acceso", "logout"); ?>"><button class="dropdown-item text-center" type="button">Cerrar sesión</button></a>

				</div>
			</div>
		<?php
		} else {
		?>
			<li class="main_nav_item"><a href="login.php">Inicio de Sesion</a></li>
		<?php
		}
		?>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
	    <!-- Modal -->
		<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


	</header>