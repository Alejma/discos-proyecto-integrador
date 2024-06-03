<div class="container">
<div class="alert alert-dark" role="alert">
                <h4 class=" text-center">Registrar rol</h4>
        </div>
	<form action="<?php echo getUrl("Trol", "Trol", "postInsert"); ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4 form-group">
				<label>Rol</label>
				<input  required="required" type="text" name="desc_rol" class="form-control" placeholder="Rol">
			</div>
		</div>
		<div class="modal-footer">
			<div  class="col-md-5">
                <input type="submit" value="Enviar" class="btn btn-dark">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button></div>
        </div>
	</form>
</div>