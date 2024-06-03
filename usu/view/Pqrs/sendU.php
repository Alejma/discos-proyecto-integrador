<!--======================================== Contenido de la pagina ========================================-->
	<section class="full-reset" style="background-color: #fff; padding: 20px 0;">
		<div class="container">
			<div class="row">
				<section class="col-xs-12 col-sm-8 col-md-12 info-section-ins">
					<!--======================================== Mision y vision ========================================-->
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
						 
						  <?php
						if (isset($_SESSION['mensaje'])) {
						?>
							<div class="alert alert-success mt-4 alert-dismissible fade show" id="alerta" role="alert">
								<?= $_SESSION['mensaje'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php
							unset($_SESSION['mensaje']);
						}
						?>
						  <form action="<?php echo getUrl("Pqrs", "Pqrs", "postSendU"); ?>" method="POST">
						  
          <div class="form-group">
       <label for="exampleFormControlInput1">Radica tu PQRSF</label>
        <label for="exampleFormControlInput1">Nombre y Apellido</label>
        <input  class="form-control" id="exampleFormControlInput1"  name="nombre" type="text"  required="required" data-error="Se requiere el nombre.">
	</div>

		 <div class="form-group">
       
        <label for="exampleFormControlInput1">Correo</label>
        <input  class="form-control" id="exampleFormControlInput1"  name="correo" type="email"  required="required" data-error="Valid email is required.">
         </div>

         <div class="form-group">
        <label for="exampleFormControlSelect1">Seleccion</label>
          <select class="form-control" id="exampleFormControlSelect1" required="required" data-error="Complete este campo."  name="tipopqrsf">
		  <?php
									foreach ($tipoPQRSF as $tpq) {
										echo "<option value='" . $tpq['cod_pqrsf_tipo'] . "'>" . $tpq['desc_pqrsf_tipo'] . "</option>";
									}
									?>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="pqrsf_desc" placeholder="Radique aquí su PQRSF" required="required" data-error="Por favor escribe el asunto. rows="3"></textarea>
	

</div>
<button type="submit" class="btn btn-primary">Radicar</button>
</form>
					
                     
					</div>

				</div>

						  </div>
						</div>
					</article>
					
			</div>
		</div>
	</section>
				<!--======================================== Navegacion fija lateral derecha ========================================-->
				
			</div>
		</div>
	</section>