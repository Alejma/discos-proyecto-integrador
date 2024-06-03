<div class="container">
    <div class="alert alert-dark" role="alert">
        <h4 class="text-center">Esta seguro de inhabilitar esta oferta</h4>
    </div>
    <?php
    foreach ($oferta as $ofer) {
    ?>
        <form action="<?php echo getUrl("Oferta", "Oferta", "postDelete"); ?>" method="post">
            <div class="row">
                <div class="form-group col-md-4">
                    <label>Nombre de la oferta</label>
                    <input type="hidden" name="id_oferta" value="<?php echo $ofer['id_oferta']; ?>">
                    <input type="text" readonly name="nom_oferta" class="form-control" value="<?php echo $ofer['nom_oferta']; ?>">
                </div>
            </div>
         
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark">Confirmar</button>
                </div>
            </div>
        </form>

    <?php
    }
    ?>
</div>