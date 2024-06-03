<?php
foreach ($usuarios as $usu) {
  ?>
<div class="modal-body">
        <form action="<?php echo getUrl("Usuarios","Usuarios","postDelete",array("id"=>$usu['usu_id']))?>" method="post" enctype="multipart/form-data">
    <div class="alert alert-dark" role="alert">
        <h4 class="alert-heading text-center">Esta seguro de eliminar este usuario</h4>
    </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <label>Primer nombre</label>
                    <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
                <input type="text"  name="usu_nombre" class="form-control" value="<?php echo $usu['usu_nombre'];?> " disabled>
                </div>
                <div class="col-md-4 form-group">
                    <label>Segundo nombre</label>
                    <input type="text"  name="usu_nombre2" class="form-control" value="<?php echo $usu['usu_nombre2'];?>" disabled>
                </div>            
                <div class="col-md-4 form-group">
                    <label>Apellidos</label>
                    <input type="text"  name="usu_apellido" class="form-control" value="<?php echo $usu['usu_apellido'];?>" disabled>
                </div>
            </div>
            <div class="row">

            <div class="col-md-6 form-group">
                <label>Correo</label>
                <input  required="required" type="text"  name="usu_correo" class="form-control" value="<?php echo $usu['usu_correo'];?>"disabled>
            </div>
            <div class="col-md-6 form-group">
                <label>telefono</label>
                <input  required="required" type="text"  name="usu_ntelefono" class="form-control" value="<?php echo $usu['usu_ntelefono'];?>"disabled>
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