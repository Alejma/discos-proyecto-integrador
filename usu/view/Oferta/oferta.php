
	<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-8 col-md-12 info-section-ins">
					<!--======================================== Mision y vision ========================================-->
					<article class="full-reset" id="mision-vision">
						<div class="page-header" style="margin-bottom:40px;">
						<h1><i class="fa fa-shopping-cart"></i> &nbsp; PRODUCTOS OFERTADOS</h1>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles"></div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
							"Revive la magia de la música: encuentra tus discos favoritos en nuestra tienda" 
							</p>
						  </div>
						</div>
						<br><br>
					</article>
					<!--======================================== Reseña historica ========================================-->
					

	</section>

	  <!-- Start Content -->
	  <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categorias</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Salsa
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Rorck
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Sport</a></li>
                            <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Vinilos
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Bag</a></li>
                            <li><a class="text-decoration-none" href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>">Sweather</a></li>
                            <li><a class="text-decoration-none" href="#">Sunglass</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
			

            <div class="col-lg-9">
<?php
foreach ($ofertas as $ofer) {
?>	
                <div class="row-cols-1 row-cols-md-1 row-cols-lg-">
				<div class="col-lg-4 col-md-6 mb-4">
				<div class="card product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo $ofer['imag_oferta']?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>"><i class="far fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="<?php echo getUrl("Oferta", "Oferta", "getPostOferta", array("id_oferta" => $ofer['id_oferta']))  ?>" class="h3 text-decoration-none"><?php echo $ofer['nom_oferta']; ?></a>
                               
                                
                                <p class="text-center mb-0">$250.00</p>
                            </div>
                        </div>
                    </div>
					
				<!--======================================== Navegacion fija lateral derecha ========================================-->
				<?php
}
?>
			</div>
			
		</div>


	</section>




  
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->






</body>

</html>