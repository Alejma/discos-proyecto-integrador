<?php
foreach ($usuarios as $usu) {
  ?>
<div class="modal-body">
    <form action="<?php echo getUrl("Usuarios","Usuarios","postUpdate")?>" method="post" enctype="multipart/form-data">
    <div class="alert alert-dark" role="alert">
        <h4 class="alert-heading text-center">Esta seguro de editar este usuario</h4>
    </div>
    <div class="row">
            <div class="col-md-4 form-group">
                <label>Primer nombre</label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'];?>">
            <input  required="required" type="text"  name="usu_nombre" class="form-control" value="<?php echo $usu['usu_nombre'];?>">
            </div>
            <div class="col-md-4 form-group">
                <label>Segundo nombre</label>
                <input  required="required" type="text"  name="usu_nombre2" class="form-control" value="<?php echo $usu['usu_nombre2'];?>">
            </div>
            <div class="col-md-4 form-group">
                <label>Tipo de rol</label>
                <select  required="required" class="form-control" name="cod_rol">
                    <?php foreach($roles as $rol){
                        if($usu['cod_rol']==$rol['cod_rol']){
                            echo "<option value='".$usu['cod_rol']."' selected>".$usu['desc_rol']."</option>";
                        }else{
                        ?>
                            <option value="<?php echo $rol['cod_rol'];?>"><?php echo $rol['desc_rol']; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label>Apellidos</label>
                <input  required="required" type="text"  name="usu_apellido" class="form-control" value="<?php echo $usu['usu_apellido'];?>">
            </div>
            <div class="col-md-6 form-group">
                <label>Correo</label>
                <input  required="required" type="text"  name="usu_correo" class="form-control" value="<?php echo $usu['usu_correo'];?>">
            </div>
        </div>
        <div class="col-md-6 form-group">
                <label>Número de telefono</label>
                <input required="required" type="number"  name="usu_ntelefono" class="form-control" value="<?php echo $usu['usu_ntelefono'];?>">
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