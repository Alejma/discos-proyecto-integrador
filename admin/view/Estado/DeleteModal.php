<div class="container">
    <div class="alert alert-dark" role="alert">
    <h4 class=" text-center">Esta seguro de borrar este estado</h4>
    </div>      
    <?php
        foreach ($estados as $estd) {
    ?>
    <form action="<?php echo getUrl("Estado","Estado","postDelete"); ?>" method="post">

        <div  class="row">
            <div class="form-group col-md-4">
                <label>estado</label>
                <input type="hidden" name="id_estado" value="<?php echo $estd['id_estado']; ?>">
                <input type="text" readonly name="desc_estado" class="form-control" value="<?php echo $estd['desc_estado']; ?>"> 
            
            </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark">Confirmar</button>
            </div>
    </form>
</div>
<?php
    }
?>