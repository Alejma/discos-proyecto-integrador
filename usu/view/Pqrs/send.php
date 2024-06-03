
    

    

  

<!--======================================== Contenido de la pagina ========================================-->
<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-8 col-md-12 info-section-ins">
			
				<article class="full-reset" id="mision-vision">
						<div class="page-header" style="margin-bottom:40px;">
						  <h1><i class="fa fa-graduation-cap"></i> &nbsp;  CONTACTO</h1>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles"></div>
						  <div class="panel-body">
						    <p class="lead text-justify">	
								Bienvenido estimado usuario en este apartado encontraras un formulario el cual te ayudara a comunicarse con nosotros
							</p>
						  </div>
						</div>
						<br><br>
						<div class="panel panel-primary">
						  <div class="panel-heading lead text-center titles"></div>
						  <div class="panel-body">
						    
						  <div class="container">
	
					
								
									
	 <!-- Start Contact -->
	 <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form" action="<?php echo getUrl("Pqrs", "Pqrs", "postSend"); ?>" method="POST">
						  <?php
								if (isset($_SESSION['user_id'])) {
								?>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input type="text" class="form-control mt-1" id="exampleFormControlInput1" name="name" value="<?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellidos']; ?>" required="required" data-error="Se requiere el nombre.">
        <input type="hidden" name="usu_id" value="<?php echo $_SESSION['user_id']; ?>"> 
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="exampleFormControlInput1">Correo</label>
                        <input type="email" class="form-control mt-1" id="exampleFormControlInput1" name="correo"  type="email" value="<?php echo $_SESSION['correo']; ?>" required="required" data-error="Valid email is required.">
                    </div>
                </div>
                <div class="mb-3">
				<label for="exampleFormControlSelect1">Seleccion</label>
          <select class="form-control" id="exampleFormControlSelect1" required="required" data-error="Complete este campo."  name="tipopqrsf">
		  <?php
			foreach ($tipoPQRSF as $tpq) {
			echo "<option value='" . $tpq['cod_pqrsf_tipo'] . "'>" . $tpq['desc_pqrsf_tipo'] . "</option>";
					}
			?>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1">Contexto</label>
                    <textarea class="form-control mt-1" id="exampleFormControlTextarea1" name="pqrsf_desc" laceholder="Radique aquí su PQRSF" required="required" data-error="Por favor escribe el asunto. rows="3"></textarea>
	<?Php
								}	
								?></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Radicar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
							</selection>
							

						</div>
						
					</div>

				</div>

		</div>
	</div>
</div>
</div>
