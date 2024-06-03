
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-8 col-md-12 info-section-ins">
					<!--======================================== Mision y vision ========================================-->
					<article class="full-reset" id="mision-vision">
						<div class="page-header" style="margin-bottom:40px;">
						  <h1><i class="fa fa-graduation-cap"></i> &nbsp; INNOVACION E INVESTIGACION</h1>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles"></div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
								Bienvenido estimado usuario en este apartado encontraras todo sobre los proyectos realizados por  la Escuela gastronomica 
							</p>
						  </div>
						</div>
						<br><br>
					</article>
					<!--======================================== Reseña historica ========================================-->
					<div class="divider-general"></div>
	<!--======================================== Acontecer institucional ========================================-->
	<section class="events-ins">
		<div class="container-fluid">
			<h2 class="text-center titles">PROYECTOS</h2>
			<br><br>
			<div class="row">
				<!--======================================== Articulo 1 ========================================-->
        <?php
foreach ($noticias as $noti) {
?>
      
        <article class="col-xs-12 col-sm-7 col-md-4" >
					<div class="thumbnail" >
				      <img src="<?php echo $noti['img_noticia'] ?>"  class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center"><?php echo $noti['titulo_noticia'] ?></h3>
				        <p class="card-text"><?php echo $noti['fecha_noticia'] ?></p>
				        <p class="text-center"><a href="<?php echo getUrl("Noticia", "Noticia", "getDetalleNoticia", array("cod_noticia" => $noti['cod_noticia']))  ?>" class="btn btn-dark" role="button">Ingresar</a></p>
				      </div>
				    </div>
				</article>

        <?php
}
?>

			</div>
		</div>
	</section>
				<!--======================================== Navegacion fija lateral derecha ========================================-->
				
			</div>
		</div>
	</section>