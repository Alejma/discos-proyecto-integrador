<div class="divider-general"></div>
<?php
foreach ($noticias as $noti) {
?>

	<article class="full-reset" id="mision-vision">
						<div class="page-header text-center" style="margin-bottom:40px;">
						  <h1><i class="fa fa-graduation-cap"></i> &nbsp;  <?php echo $noti['titulo_noticia'] ?></h1>
						</div>
						<br><br>
						<div class="panel panel-primary" style="margin-right: 40px; margin-top: 20px;margin-left: 40px">
						  <div class="panel-heading lead text-center titles"></div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
							<?php echo $noti['desc_noticia'] ?>
							<br><br>
							<img src="<?php echo $noti['img_noticia'] ?>"  height="500" width="500" class="img-responsive img-rounded" style="display: block;
margin-left: auto;
margin-right: auto; 
">
						</p>
						  </div>
						</div>
						<br><br>
					</article>
					<?php
}
?>
	<!--======================================== Acontecer institucional ========================================-->
	<section class="events-ins">
		<div class="container-fluid">

			<br><br>
			<div class="row">
				<!--======================================== Articulo 1 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      
				      <div class="caption">
				        <h3 class="text-center">Solicitud oferta de productos</h3>
				        
				        <p class="text-center"><a href="<?php echo getUrl("Productos", "Productos", "getSendU") ?>" class="btn btn-dark" role="button">ingresar</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 2 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      
				      <div class="caption">
				        <h3 class="text-center">Productos ofertados</h3>
				        
				        <p class="text-center"><a href="<?php echo getUrl("Oferta", "Oferta", "getOferta") ?>" class="btn btn-dark" role="button">ingresar</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 3 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      
				      <div class="caption">
				        <h3 class="text-center">Estado de solicitud</h3>
				        
				        <p class="text-center"><a href="#" class="btn btn-dark" role="button">ingresar</a></p>
				      </div>
				    </div>
				</article>

				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      
				      <div class="caption">
				        <h3 class="text-center">Contactanos</h3>
				        
				        <?php
					if (isset($_SESSION['user_id'])) {
					?>
						<p class="text-center"><a href="<?php echo getUrl("Pqrs", "Pqrs", "getSend") ?>"class="btn btn-dark">ingresar</a></p>
					<?php
					} else {
						echo "<p class='text-center'class='btn btn-dark'><a href=" . getUrl('Pqrs', 'Pqrs', 'getSendU') . ">ingresar</a></p>";
					}
					?></p>
				      </div>
				    </div>
				</article>
			</div>
		</div>
	</section>
	<div class="divider-general"></div>
