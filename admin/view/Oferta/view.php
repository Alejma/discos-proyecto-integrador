<div class="container">
    <div class="alert alert-dark" role="alert">
    <h4 class=" text-center">Esta seguro de habilitar esta oferta</h4>
    </div>        
    <?php
        foreach ($oferta as $ofer) {
    ?>
    <form action="<?php echo getUrl("Oferta","Oferta","postView"); ?>" method="post">

        <div  class="row">
            <div class="form-group col-md-4">
                <label>Nombre</label>
                <input type="hidden" name="id_oferta" class="form-control" value="<?php echo $ofer['id_oferta']; ?>">
                <textarea name="nom_oferta" rows="1" cols="50"  value="#"><?php echo $ofer['nom_oferta']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark">Confirmar</button>
            </div>
        </div>
    </form>
</div>
<?php
    }
?>