<div class="container">
    <div class="alert alert-dark" role="alert">
        <h4 class=" text-center">Registrar estado</h4>
    </div>
    <form action="<?php echo getUrl("Estado", "Estado", "postInsert"); ?>" method="post">
        <div class="row">
            <div class="form-group col-md-8">
                <label>estado</label>
                <input required="required"  type="text" name="desc_estado" class="form-control" placeholder="Estado">
            </div>
        </div>
        <div class="modal-footer">
			<div  class="col-md-5">
				<input type="submit" value="Enviar" class="btn btn-dark">
				<button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

    </form>
</div>