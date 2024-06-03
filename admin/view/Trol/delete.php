<div class="container">
<div class="alert alert-dark" role="alert">
            <h4 class="text-center">Está seguro de que desea eliminar este rol</h4>
    </div>
    <?php
    foreach ($rol as $rol) {
    ?>
        <form action="<?php echo getUrl("Trol", "Trol", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Rol</label>
                    <div>
                        <input type="hidden" name="cod_rol" class="form-control" value="<?php echo $rol['cod_rol']; ?>">
                        <input type="text" readonly name="desc_rol" class="form-control" value="<?php echo $rol['desc_rol'] ?>">
                        
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark">Confirmar</button>
            </div>
        </form>
    <?php
    }
    ?>
</div>