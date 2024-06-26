<div class="container">
	<div class="alert alert-dark" role="alert">
		<h4 class=" text-center">Registrar Producto</h4>
	</div>
	<form action="<?php echo getUrl("Oferta", "Oferta", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<label>Nombre de la oferta</label>
				<input  type="text" name="nom_oferta" class="form-control text-center" placeholder="Nombre" required="required">
			</div>
		</div>
		<div class="row">	
			<div class="col-md-12 form-group">
				<label>Descripción oferta</label>
				<textarea  rows="5" cols="12" class="form-control" name="desc_oferta" placeholder="Descripción" required="required"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
					<label>Fecha final</label>
					<input  required="required" type="date" name="fech_fin_oferta" class="form-control" placeholder="Fecha final">
					<input type="hidden" name="fech_ini_oferta" class="form-control">
			</div>
				<div class="col-md-6">
					<label>cantidad disponibles</label>
					<input   required="required" class="form-control" type="number" name="cupos_oferta">
				</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<label>Imagen</label>
				<input class="form-control" required="required" type="file" name="imag_oferta">
			</div>
		</div>
		
		<div class="modal-footer">
			<div  class="col-md-5">
				<input type="submit" value="Enviar" class="btn btn-dark">
				<button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
			</div>
		</div>


	</form>